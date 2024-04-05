<h1>Cupcake Fundraiser</h1>

<form action="process.php" method="post">
    <p>Your name</p>
    <label>
        <input name="name" type="text" placeholder="Please input your name">
    </label><br>
    <p>Cupcake flavors:</p>
    <br>
    <label>
        <input type="checkbox" name="flavor[]" value="The Grasshopper">
        The Grasshopper
    </label><br>

    <label>
        <input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon">
        Whiskey Maple Bacon
    </label><br>

    <label>
        <input type="checkbox" name="flavor[]" value="Carrol Walnut">
        Carrol Walnut
    </label><br>

    <label>
        <input type="checkbox" name="flavor[]" value="Salted Caramel Cupcake">
        Salted Caramel Cupcake
    </label><br>

    <label>
        <input type="checkbox" name="flavor[]" value="Red Velvet">
        Red Velvet
    </label><br>

    <label>
        <input type="checkbox" name="flavor[]" value="Lemon Drop">
        Lemon Drop
    </label><br>

    <label>
        <input type="checkbox" name="flavor[]" value="Tiramisu">
        Tiramisu
    </label><br>

    <input type="submit" />
</form>
