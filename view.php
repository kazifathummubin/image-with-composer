<?php
session_start();
    include('function/function.php');
    $query = "SELECT * FROM students";
    $data = $student->select($query);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Exam : 46</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Exam : 46</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header class="row header">
        <div class="col-md-12">Header</div>
    </header>
    <div class="row">
        <div class="col-md-12">&nbsp;</div>
    </div>

    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    session_destroy();
                    session_unset();
                }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Address</th>
                        <th>Biography</th>
                        <th>Birth Year</th>
                        <th>Gender</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($students = $data->fetch_object()){
                ?>
                    <tr>
                        <td><?php echo $students->fname; ?></td>
                        <td><?php echo $students->lname; ?></td>
                        <td><?php echo $students->email; ?></td>
                        <td>
                            <?php
						        $my_file = $students->biography;
                                if(file_exists("biography/".$my_file)) {
                                $myfile = fopen("biography/".$my_file, "r");
                                echo fread($myfile, filesize("biography/". $my_file));
                            fclose($myfile);
                        }
                        else{ echo  "Biography not added";}
					?>

                        </td>
                        <td><?php echo $students->doy; ?></td>
                        <td><?php echo $students->gender; ?></td>
                        <td>
                            <?php
                                if(file_exists('image/'.$students->photo)){
                                    echo "<img src='image/".$students->photo."' width='80px'>";
                                }
                                else{ echo "Image not Added";}
                            ?>
                        </td>
                    </tr>
                <?php }?>
                </tbody>

            </table>
        </div>
    </div>

    <footer class="row footer">
        <div class="col-md-12">Footer</div>
    </footer>
</div>
</body>
</html>