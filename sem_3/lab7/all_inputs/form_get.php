<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Student Form</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>

<body bgcolor="lightblue" class="bg-dark text-white ">
    <form action="./process/get_data.php" method="GET">
        <div class="text-center card card-body text-success h1 m-5">
            GET Form Data
        </div>
        <div class="col-12 bg-dark">
            <center class="mt-5 pt-2">
                <div class="col-5 card card-body">
                    <table border="1" class="mb-2 border-3 bg-light text-dark table border border-dark">
                        <tr>
                            <td>
                                name
                            </td>
                            <td align="center">
                                <input class="card" type="text" name="name" placeholder="Enter Your name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                enroll No.
                            </td>
                            <td align="center">
                                <input class="card" type="number" name="ennumber" placeholder="23456">
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
                            <td align="center">
                                <label>
                                    Reading <input class="card" type="checkbox" name="hobby[]" value="Reading">
                                </label>
                                <label>
                                    Drawing <input class="card" type="checkbox" name="hobby[]" value="Drawing">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Address
                            </td>
                            <td align="center">
                                <textarea class="card" name="address" cols="30" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Phone
                            </td>
                            <td align="center">
                                <input class="card" type="phone" name="phone" placeholder="Enter Phone">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td align="center">
                                <input class="card" type="email" name="email" placeholder="Enter Email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                password
                            </td>
                            <td align="center">
                                <input class="card" type="password" name="pass" placeholder="Enter Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Color
                            </td>
                            <td align="center">
                                <input class="card p-3" type="color" name="color" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ranage
                            </td>
                            <td align="center">
                                <input class="card" type="range" min="0" max="10" name="range">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                branch
                            </td>
                            <td align="center">
                                <select class="card" name="branchName">
                                    <option selected disabled>Select Any</option>
                                    <option>MCA</option>
                                    <option>B.Tech</option>
                                    <option>BCA</option>
                                    <option>CA</option>
                                </select>
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