<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Employee Form</title>
    <link rel="stylesheet" href="./assets/styles.css">
</head>

<body bgcolor="lightblue" class="bg-dark text-white ">
    <form action="./data/get_info.php" method="GET">
        <div class="text-center card card-body text-success h1 m-5">
            POST Form Data
        </div>
        <div class="col-12 bg-dark">
            <center class="mt-5 pt-2">
                <div class="col-5 card card-body">
                    <table border="1" class="mb-2 border-3 bg-light text-dark table border border-dark">
                        <tr>
                            <td>
                                EMP Username
                            </td>
                            <td align="center">
                                <input class="card" type="text" name="name" placeholder="Enter Your Emp name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                password
                            </td>
                            <td align="center">
                                <input class="card" type="password" name="pass" id="passId" placeholder="Enter Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                EMP No.
                            </td>
                            <td align="center">
                                <input class="card" type="text" name="empno" id="ennumberId" placeholder="23456">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                gender
                            </td>
                            <td align="center">
                                <input checked type="radio" name="gender" value="1">Male
                                <input type="radio" name="gender" value="2">Female
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Hobby
                            </td>
                            <td>
                                <input type="checkbox" value="Drawing" name="hobby[]"> Drawing
                                <input type="checkbox" value="dance" name="hobby[]"> Dance
                                <input type="checkbox" value="reading" name="hobby[]"> Reading
                            </td>
                        </tr>
                        <tr>
                            <td>
                                city
                            </td>
                            <td align="center">
                                <input class="card" type="text" name="city" placeholder="City Name">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" align="center">
                                <input class="btn btn-info" type="submit" name="submit" value="submit">
                                <input class="btn btn-danger" type="reset" value="reset">
                            </td>
                        </tr>
                    </table>
                </div>
            </center>
        </div>
    </form>
</body>

</html>