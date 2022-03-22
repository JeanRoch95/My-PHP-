<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>Exo Final studi La sécurité en PHP</h1>


        <?php

        function isSuccessfullLoaded(array $uploadedFile): bool {
                return isset($uploadedFile['error']) && $uploadedFile['error'] === UPLOAD_ERR_OK;
        }

        function isFileIsLessThan2M(array $uploadedFile): bool {
                return $uploadedFile['size'] < 2000000;
        }

        function isMimeTypeAuthorized(array $authorizedMimeTypes, array $uploadedFile): bool {
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->file($uploadedFile['tmp_name']);

            return in_array($mimeType, $authorizedMimeTypes, true);
        }

        function getExtensionFromMimeType(array $authorizedMimeTypes, array $uploadedFile): string{
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->file($uploadedFile['tmp_name']); 

            if ($extension = array_search($mimeType, $authorizedMimeTypes, true)){
                return $extension;
        }
            throw new Exception('Le type Mime n\est lié à aucune extension');
        }

        function moveUploaderFile(array $uploadedFile, string $filename, string $extension): bool {
            return move_uploaded_file(
                $uploadedFile['tmp_name'],
                sprintf('./upload/%s,%s.%s',
                    $filename,
                    sha1_file($uploadedFile['tmp_name']),
                    $extension
                )
            );
        }

        @mkdir('./telechargement', 0644);
// Stockage des MimiType dans un tableau associatif
$authorizedMimeTypes = [
        "png" => "image/png",
        "jpg" => "image/jpeg",
        "gif" => "image/gif",
];

$message = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try{

    $filename = $_POST['filename'] ?? null;
    $uploadedFile = $_FILES['uploaded_file'] ?? [];

        if(!isSuccessfullLoaded($uploadedFile)){
                throw new Exception('Error, while loading files. Please try again.');
        }

        if(!isMimeTypeAuthorized($authorizedMimeTypes, $uploadedFile)){
            throw new Exception('Mime type file is not supported');
        }

        if (!isFileIsLessThan2M($uploadedFile)){
                throw new Exception('Error, file is too big.');
        }

        if (!moveUploaderFile($uploadedFile, $filename, getExtensionFromMimeType($authorizedMimeTypes, $uploadedFile))){
            throw new Exception('Le telechargement à échoué.');
        }

        $message = 'Upload réussi';
    } catch (runtimeException $e){
        $message = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload de fichier</title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <?php $message ? sprintf('<p>%s</p>', $message) : '' ?>
            <label>
                Nom de l'image
                <input type="text" name="filename">
            </label>
            <label>
                Fichier à télécharger
                <input type="file" name="uploaded_file">
            </label>
            <label>
                <input type="hidden" name="authorized_mime_types" value="image/png,image/jpeg,image/gif">
            </label>
            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>

<?php
            include("common/footer.php");
?>