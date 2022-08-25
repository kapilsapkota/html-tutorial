<html>
    <head>
        <title>Form validation</title>
        <style > 
                .error{
                    color: red;
                }
        </style>
    </head>
    <body>
        <h1>Form validation</h1>
        <?php
        //initialize a empty variable to store for value form value and errors
            $name = $email = $address =$phone = $remarks = $gender = "";
            $nameError = $emailError = $addressError =$phoneError =  $remarksError = $genderError = "";

        ?>

        <!-- from validation php-->
        <?php
        //check either the request is get or post
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                    //Name validation 
                    if(empty($_POST ['name'])){
                        $nameError = "Name is required";
                    }
                    else{       
                        $name = checkInput($_POST['name']);
                        // users allows alphabets and white space
                        if(preg_match("/^[a-z A-Z-]*$/",$name)){
                            $nameError = "Only letters and whitespaces allowed";
                        }
                    }

                    //Email validation 
                    if(empty($_POST ['email'])){
                        $emailError = "Email is required";
                    }
                    else{       
                        $email = checkInput($_POST['email']);
                        //check email format
                        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                $emailError = "Please enter validate email";
                        }
                    }
    
                    //Address validation 
                    if(empty($_POST ['address'])){
                        $addressError= "Address is required";
                    }
                    else{       
                        $address = checkInput($_POST['address']);
                    }

                    //Phone validation 
                    if(empty($_POST ['phone'])){
                        $phoneError = "Phone is required";
                    }
                    else{       
                        $phone = checkInput($_POST['phone']);
                        if(!filter_var($phone,FILTER_VALIDATE_INT)){
                            $phoneError ="enter validate number";
                        }
                    }

                    //Gender validation 
                    if(empty($_POST ['gender'])){
                        $genderError = "Gender is required";
                    }
                    else{       
                        $gender = checkInput($_POST['gender']);
                    }

                    //Remarks validation 
                    if(empty($_POST ['remarks'])){
                        $remarksError = "Remarks is required";
                    }
                    else{       
                        $remarks = checkInput($_POST['remarks']);
                    }
            }
            function checkInput($data){
                //trim the whitespace
                    $data = trim($data);
                    // cut if any slashes
                    $data = stripcslashes($data);
                    //encodes html into encoded html form 
                    $data = htmlspecialchars($data);

                    return $data;
            }
        ?>

        
        <span class="error">* Reqiured Field</span>
        <br><br>
            <form method ="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                Name : <input type="text" name ="name" value="" <?php echo  $name;?>
                <span class="error">*<?php echo $nameError;?></span>
                <br><br>

                Email: <input type="text" name ="email" value="" <?php echo  $email;?>
                <span class="error">*<?php echo $emailError;?></span>
                <br><br>

                Address : <input type="text" name ="address" value="" <?php echo  $address;?>
                <span class="error">*<?php echo $addressError;?></span>
                <br><br>

                Phone : <input type="number" name ="phone" value="" <?php echo  $phone;?>
                <span class="error">*<?php echo $phoneError;?></span>
                <br><br>

                Remarks :<textarea name ="remarks">
                    <?php    echo $remarks; ?>
                </textarea>
                <span class="error">*<?php echo $remarksError;?></span>
                <br><br>

                Gender : <input type="radio" name ="gender" <?php if(isset($gender) && $gender =="male"){
                    echo "checked";}?> value="male" >Male
                    <input type="radio" name ="gender" <?php if(isset($gender) && $gender =="female"){
                    echo "checked";}?> value="male" >Female
                     <input type="radio" name ="gender" <?php if(isset($gender) && $gender =="others"){
                    echo "checked";}?> value="male" >Others
                    <span class="error">*<?php echo $genderError;?></span>
                    <br><br>
                    <input  type="submit" value="submit">
        </form>
        <h2>Your Input is:</h2>
        <?php
            echo $name;
            echo "<br>";
            echo"<br>";
            echo $phone;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $remarks;
            echo "<br>";
            echo $gender;
            echo "<br>";
        ?>
    </body>
</html>