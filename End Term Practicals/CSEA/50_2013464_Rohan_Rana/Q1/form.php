<html>
    <head>
        <title>
            Book
        </title>
    </head>
    <body>
        <div align="center">
        
        <form method="POST" action="input.php">
            <table>
            <tr><td>Book Name </td><td><input type="text" placeholder="Enter Book Name" name="bname" required></td></tr>
            <tr><td>Author Name </td><td> <input type="text" placeholder="Enter Author Name" name="aname"></td></tr>
            <tr><td>ISBN Number </td><td><input type="text" placeholder="Enter ISBN Number" name="isbn"></td></tr>
            <tr><td>Publisher Name</td><td> <input type="text" placeholder="Enter Publisher Name" name="pname"></td></tr>
            </table>
            <br>Publication Year<br>
            <select name="pyear">
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
              </select><br>
            <br> Book Type <br>
            Action <input type="radio" value="Action" name="btype"><br>
            Adventure <input type="radio" value="Adventure" name="btype"><br>
            Classics <input type="radio" value="Classics" name="btype"><br>
            Comic Book <input type="radio" value="Comic_Book" name="btype"><br>
            Graphic Novel <input type="radio" value="Graphic_Novel" name="btype"><br>
            Detective <input type="radio" value="Detective" name="btype"><br>
            Mystery <input type="radio" value="Mystery" name="btype"><br>
            Historical Fiction <input type="radio" value="Historical_Fiction" name="btype"><br>
            Horror <input type="radio" value="Horror" name="btype"><br>
            Literary Fiction <input type="radio" value="Literary_Fiction" name="btype"><br>
            <br>
            Number Of Pages(between 200-400)<br>
            <input type="number" name="volume" min="200" max="400"> <br><br>
            <input type="submit" name="submit">

        </form>
    
    </div>
    </body>
</html>