<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
</head>
<body>

<?php
$hasError = false;
$name = "";
$name_err = "";
$email = "";
$gender = "";
$email_err = "";
$gender_err = "";
$birth_day_err = "";
$birth_day = "";
$birth_month = "";
$birth_month_err = "";
$birth_year = "";
$birth_year_err = "";
$bloodgroup="";
$Degree="";
$Degree_err="";
$bloodgroup_err="";

if($_SERVER["REQUEST_METHOD"]=='POST')
{
    if(empty($_POST["name"]))
	{
		$hasError = true;
		$name_err = "Name Field required";
	}
    else{
        $name=$_POST["name"];
    }

    if(empty($_POST["email"])){
        $hasError = true;
        $email_err="This Field is Required";
    }
    elseif(!(strpos($_POST["email"],"@")>0) and !(strpos($_POST["email"],".")>0))
    {
        $hasError = true;
        $email_err = "Email is not Valid";
    }
    else{
        $email=$_POST["email"];
    }
     if(!isset($_POST["gender"]))
    {
        $hasError = true;
        $err_gender = "Gender required";
    }
    else
    {
        $gender = $_POST["gender"];
    }
    
    if(empty($_POST["day"]) or $_POST["day"]=="day")
    {
        $hasError = true;
        $birth_day_err="This Field Is Requird";
    }
    else{
        $birth_day=$_POST["day"];
    }

    if(empty($_POST["month"]) or $_POST["month"]=="month")
    {
        $hasError = true;
        $birth_month_err="This Field Is Requird";
    }
    else{
        $birth_month=$_POST["month"];
    }

    if(empty($_POST["year"]) or $_POST["year"]=="year")
    {
        $hasError = true;
        $birth_year_err="This Field Is Requird";
    }
    else{
        $birth_year=$_POST["year"];
    }

    if(!$hasError)
    {
        echo "<h1>Input :</h1>";
        echo $name."<br>";
        echo $email."<br>";
        echo $gender."<br>";
        echo $birth_day,$birth_month,$birth_year."<br>";
        echo $Degree."<br>";
        echo $bloodgroup."<br>";
    } 

    if (empty($_POST["degree"]))
     {
        $Degree =""; 
     }
    

    if (empty($_POST["bloodgroup"]))
     {
          $bloodgroup ="Must be selected"; 
     } 
    else {
       //   $bloodgroup =test_input($_POST["bloodgroup"]);
    }         
}

?>
<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><h1>Validation Information Form</h1></legend>
            <table align="center">
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $name ?>" id="name">
                    </td>
                    <td>
                        <?php echo $name_err ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" name="email" id="email" value="<?php echo $email ?>">
                    </td>
                    <td>
                        <?php echo $email_err ?>
                    </td>
                </tr>
    
                <tr>
                    <td>
                        Birth Date:
                    </td>
                    <td>
                        <select name="day">
                            <option value="Day" selected disabled>Day</option>
                            <?php for($i=1;$i<=31;$i++)
                            {
                                echo "<option value=$i ".(($birth_day==$i)?'selected':"")." >$i</option>";
                            } 
                            ?>
                        </select>
                        <select name="month">
                            <option value="Month" selected disabled>Month</option>
                            <?php for($i=1;$i<=12;$i++)
                            {
                                echo "<option value=$i ".(($birth_month==$i)?'selected':"").">$i</option>";
                            } 
                            ?>
                        </select>
                        <select name="year">
                            <option value="Year" selected disabled>Year</option>
                            <?php for($i=1953;$i<=1998;$i++)
                            {
                                echo "<option value=$i ".(($birth_year==$i)?'selected':"")." >$i</option>";
                            } 
                            ?>
                        </select>
                    </td>
                    <td>
                    <?php echo $birth_day_err ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male" <?php if($gender=='male') echo "checked"; ?>>
                        <label>Male</label>
                        <input type="radio" name="gender" value="female" <?php if($gender=='female') echo "checked"; ?>>
                        <label>Female</label>
                        <input type="radio" name="gender" value="other" <?php if($gender=='other') echo "checked"; ?>>
                        <label>Other</label>
                    </td>
                    <td>
                        <?php echo $gender_err ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Degree
                    </td>
                    <td>
                        <input type="checkbox" id="d1" name="degree" value="SSC">SSC
                        <input type="checkbox" id="d2" name="degree" value="HSC">HSC
                        <input type="checkbox" id="d3" name="degree" value="BSc">BSc
                        <input type="checkbox" id="d4" name="degree" value="MSc">MSc
                    </td>
                </tr>
                   <tr>
                       <td>
                           <br>
                                <b>BLOOD GROUP</b><br>
                           <br>
                       </td>
                       <td>
                        <select name="bloodgroup">
                           <option value=""></option>
                           <option value="A+">A+</option>
                           <option value="A-">A-</option>
                           <option value="B+">B+</option>
                           <option value="B-">B-</option>
                           <option value="O+">O+</option>
                           <option value="O-">O-</option>
                           <option value="AB+">AB+</option>
                           <option value="AB-">AB-</option>
                       </td>
                   </tr>     
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>