<html>
<head>

    
</head>
<body>
<h1>Dodaj korisnika</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="ime" placeholder="Unesite ime"> <br> <br>
    <input type="text" name="prezime" placeholder="Unesite prezime"> <br> <br>
    <input type="text" name="odjel" placeholder="Unesite odjel"> <br> <br>
    <input type="number" name="isAdmin"
       min="0" max="1"> <br><br>
    
    <button type="submit"> Dodaj </button>
</form>


</body>

</html>