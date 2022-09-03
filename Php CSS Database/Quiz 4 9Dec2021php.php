<!DOCTYPE html>
<html>
    <head>
        <style>
            td{
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
        
        <table width="500px">
            <tr>
                <td>Your CNIC:</td>
                <td><?php if(preg_match("/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/", $_POST["cnic"])){
                    echo $_POST["cnic"];
                }
                else{
                    echo "Invalid CNIC";
                }
                ?></td>
            </tr>
            <tr>
                <td>Your Name:</td>
                <td><?php
                    echo $_POST["name"];
                ?></td>
            </tr>
            <tr>
                <td>Your Mobile#:</td>
                <td><?php if(preg_match("/^[0-9]{4}-[0-9]{7}$/", $_POST["mnumb"])){
                    echo $_POST["mnumb"];
                }
                else{
                    echo "Invalid Mobile#";
                }
                ?></td>
            </tr>
            <tr>
                <td>Your Gender:</td>
                <td><?php
                    if(isset($_POST["gender"])){
                        echo $_POST["gender"];
                    }
                    else
                        echo "select gender";
                ?></td>
            </tr>
            <tr>
                <td>Your Country:</td>
                <td><?php
                    if(isset($_POST["country"])){
                        echo $_POST["country"];
                    }
                    else
                        echo "select country";
                ?></td>
            </tr>
            <tr>
                <td>Vaccination Status:</td>
                <td><?php
                    if(isset($_POST["Vacc"])){
                        if($_POST["Vacc"] == "yes"){
                            echo "Vaccinated";
                        }
                        else{
                            echo "Not Vaccinated";
                        }
                    }
                ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php
                    if(isset($_POST["Vacc"])){
                        if($_POST["Vacc"] == "yes"){
                            echo "Vaccination<br>";
                            ?>
                                <input type="radio" value="sinovac">Sinovac<br>
                                <input type="radio" value="Sinopharm">Sinopharm<br>
                                <input type="radio" value="Pfizer">Pfizer<br>
                                <input type="radio" value="Astranza">Astranza
                            <?php
                        }
                        else{
                            echo "Reason for not Vaccination<br>";
                            ?>
                                <input type="radio" value="medical">Medical Issue<br>
                                <input type="radio" value="preference">Not my preference<br>
                                <input type="radio" value="partially">Partially Vaccinated<br>
                            <?php
                        }
                    }
                ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Next">
                </td>
            </tr>
        </table>
    </body>
</html>