        <html>
            <head>
                <title>sdfd</title>
            </head>
            <body>
                <h1>uploading file</h1>

                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $folder = 'upload';
                        $filefolder = "files";
                        if(!file_exists($folder)){
                            @mkdir($folder);
                        }
                        
                        //getting the file name
                        $file_name_file  = $_FILES['image']['name'];
                        $file_type  = $_FILES['image']['type'];
                        $file_tmp_path  = $_FILES['image']['tmp_name'];
                        $file_size  = $_FILES['image']['size'];
                        $upload = 1;

                        $targetDir= $folder.'/';
                        
                
                        $targetFile = $targetDir.basename($file_name);
                        //taking the 
        
                        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                        //check file extension and throw error
                        if($fileExtension == 'jpg'  || $fileExtension == 'jpeg' || $fileExtension == 'png' || $fileExtension == 'gif'){
                                    $upload = 1;
                        }else{
                            $upload = 0;
                            echo "we accept jpg,png,jpeg,gif";
                        }

                        //checko if file dir exists
                        if(file_exists($targetFile)){
                            $upload = 0;
                            echo  "sorry!";
                        }

                        if($file_size>2007152){
                            $upload = 0 ;
                            echo "the file is greater than 2 mb";
                        }

                        if($upload == 0){
                            echo "Sorry! error uploading image";
                        }else{
                            if(move_uploaded_file($file_tmp_path,$targetFile)){
                                echo "Successfully uploaded".$file_name;
                            }else{
                                echo "Error uploading iamge";
                            }
                        }
                    }
                ?>   

                <form method ="post" enctype = "multipart/form-data" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <label>Choose your files</label>
                    <input type = "file" name = "image" id = "image" accept = "image/*">
                    <br>
                    <br>
                    <input type = "submit" name = "" value = "upload">
                </form>
                
            </body>
        </html>