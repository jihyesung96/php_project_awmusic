<?php 
    include_once "./include/header.php";
?>
<?php
    $conn = mysqli_connect("localhost","root","1234","AW");
    $sql = "insert into Album where title = {$_POST['title']}";
    $result = mysqli_query($conn, $sql);
            $list = "";
            while($row = mysqli_fetch_array($result)){
                $list = $list."
                <div id ='SearchResult'>
                    <img id ='SearchImg' src ='{$row['album']}'>
                        <div class='SearchResult'>
                            <h1><a href ='detailview.php?no={$row['no']}'>{$row['title']}</a></h1>
                            <p id ='SearchArtist'>{$row['artist']}</p>
                            <p>{$row['date']}</p>
                            <h4>{$row['songlist']}</h4>
                            <p id='playsong'>▶ 미리듣기</p>
                        </div>
                </div>
                ";
            }
?>
<div>
    <?=$list?>
</div>
<?php 
    include_once "./include/footer.php";
?>