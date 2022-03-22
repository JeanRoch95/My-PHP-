<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>Exercices sur La securisation des fichiers</h1>
<?php

        function isUploadedSuccessful(array $uploadedFile): bool {
                return isset($uploadedFile['error']) && $uploadedFile['error'] === UPLOAD_ERR_OK ;
        }

        function isUploadSmallerThen2M(array $uploadedFile): bool {
                return $uploadedFile['size'] < 2000000;
        }

        function isUploadTypeAuthorized(array $uploadedFile): bool {
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $mimeType = $finfo->file($uploadedFile['tmp_name']);

                return in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif']);
        }

        function getExtensionFromMime(string $mimeType): ?string {
                switch($mimeType){
                        case 'image/jpeg':
                                return 'jpg';
                        case 'image/png':
                                return 'png';
                        case 'image/gif':
                                return 'gif';
                        defaut:
                                return null;
                }
        }

        function moveUploadedFile(array $uploadedFile): bool {
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $mimeType = $finfo->file($uploadedFile['tmp_name']);
            
                return move_uploaded_file(
                    $uploadedFile['tmp_name'],
                    sprintf('./uploads/%s.%s',
                        sha1_file($uploadedFile['tmp_name']),
                        getExtensionFromMimeType($mimeType)
                    )
                );
            }


        if (!isUploadedSuccessful($_FILES['uploaded_file'])){
                throw new Exception('Error while uploading file.');
        }

        if (!isUploadSmallerThen2M($_FILES['uploaded_file'])){
                throw new Exception('Error file is too big');
        }

        if (!isUploadTypeAuthorized($_FILES[uploaded_files])){
                throw new Exception('Error, invalide file mime type');
        }

        if (!moveUploadedFile($_FILES[uploaded_file])){
                throw new Exception('Impossible to upload file.');
        }

        
echo 'Upload OK';


?>
<?php
            include("common/footer.php");
?>