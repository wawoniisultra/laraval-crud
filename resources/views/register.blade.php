<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account</title>
</head>
<body>
    <form action="/welcome" method="POST">
    @csrf 
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <label>First name:</label><br>
        <br>
        <input type="text" name="namadepan"><br>
        <br>
        <label>Last name:</label><br>
        <br>
        <input type="text" name="namabelakang"><br>
        <p>Gender:</p>
        <input type="radio" name="gender">
        <label> Male</label><br>
        <input type="radio" name="gender">
        <label> Female</label><br>
        <input type="radio" name="gender">
        <label> Other</label><br><br>

        <label>Nationality:</label><br><br>
        <select name="nationality">
            <option value="indonesian"> Indonesian</option>
            <option value="singapore"> Singapore</option>
            <option value="malaysian"> Malaysian</option>
            <option value="unitedstates"> United States</option>
        </select>

            <p>Language Spoken:</p>
            <input type="checkbox">
            <label for="language2"> Bahasa Indonesia</label><br>
            <input type="checkbox">
            <label for="language2"> English</label><br>
            <input type="checkbox">
            <label for="language3"> Other</label><br><br>
        
            <label> Bio:</label><br>
            <br>
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        
            <input type="submit" value="Sign Up">
        </form>
</body>
</html>
