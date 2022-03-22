<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>L'envoi de ficher</h1>
        <form method="POST" enctype="multipart/form-data">
            <label>
            Image :
            <input type="file" name="uploaded_file">
            </label>
            <input type="submit">
        </form>
        <?php
// Verification de l'uploading sur le serveur
    function isUploadSuccessful(array $uploadedFile): bool {
        return isset($uploadedFile['error']) && $uploadedFile['error'] === UPLOAD_ERR_OK;
    }

    function isUploadSmallerThan2M(array $uploadedFile): bool {
        return $uploadedFile['size'] < 2000000;
    }

    function isMimeTypeAuthorized(array $uploadedFile): bool {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->file($uploadedFile['tmp_name']);

        return in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif'], true);
    }

    function getExtensionFromMimeType(string $mimeType): ?string {
        switch ($mimeType){
            case 'image/jpeg':
                return 'jpg';
            case 'image/png': 
                return 'png';
            case 'image/gif':
                return 'gif';
            default:
            return null;
        }
    }

    function moveUploadedFile(array $uploadedFile): string {

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->file($uploadedFile['tmp_name']);

        $imagePath = sprintf('./uploads/%s.%s', 
        sha1_file($uploadedFile['tmp_name']),
        getExtensionFromMimeType($mimeType)
    );

             move_uploaded_file(
            $_FILES['uploaded_file']['tmp_name'],
            $imagePath
             );
        return $imagePath;
    }

            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                try{
                    if (!isUploadSuccessful($_FILES['uploaded_file'])) {
                        throw new Exception('Error while uploading file.');
                    }

                    if (!isUploadSmallerThan2M($_FILES['uploaded_file'])){
                        throw new Exception('File is too big');
                    }

                    if (!isMimeTypeAuthorized($_FILES['uploaded_file'])){
                        throw new Exception('Invalide file mime type');
                    }

                

            $imagePath = moveUploadedFile($_FILES['uploaded_file']);
            
            } catch (Exception $e){
                die($e->getMessage());
            }

            }
        ?>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                echo '<img src="'.$imagePath.'">';
            }
        ?>
<?php
            include("common/footer.php");
?>