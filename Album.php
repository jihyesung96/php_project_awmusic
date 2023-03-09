<?php 
    include_once "./include/header1.php";
?>
    <div id ="writeTable">
        <h2 >UPDATED SONG</h2>
        <form action="process/Albumwrite_process.php" method="post" enctype="multipart/form-data"  onsubmit="return inputCh()">
        <table class="writeTable">
            <tr>
                <td>
                    <input type="text" name="title" placeholder="Title">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="artist" placeholder="Artist">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="songlist"  placeholder="Songlist">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="date" placeholder="Date">
                </td>
            </tr>
            <tr>
                <td class = "filebox">
                    <label for="file">File Updated</label>
                    <input id ="albumfile" type="file" name="album" placeholder="album">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">SAVE</button>
                    <button type="reset">BACK</button>
                </td>
            </tr>
        </table>
        </form>
    </div>
<?php 
    include_once "./include/footer.php";
?>