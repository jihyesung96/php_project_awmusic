<?php 
    include_once "./include/header.php";
?>
<?php

    if(!$_POST["searchSong"]){
        if(!$_GET['searchSong']){
            ?>
        <script>
            alert("검색어를 입력하세요.");
            location.replace("index.php");
        </script>
        <?php
        }
    
    }

    if(isset($_POST['searchSong'])){
        $conn = mysqli_connect("localhost","root","1234","AW");
        $sql = "select * from Album where title 
        like '{$_POST['searchSong']}'";
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
            if($list){
                echo $list;
            }
        }
        if(isset($_POST['searchSong'])){
            $conn = mysqli_connect("localhost","root","1234","AW");
            $sql = "select * from Album where artist 
            like '%{$_POST['searchSong']}%'";
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
                if($list){
                    echo $list;
                }
            }
            
    function printList(){
    if(isset($_GET['searchSong'])){
        $conn = mysqli_connect("localhost","root","1234","AW");
        $sql = "select * from Album where title 
        like '{$_GET['searchSong']}'";
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
            if($list){
                echo $list;
            };
        }
    if(isset($_GET['searchSong'])){
        $conn = mysqli_connect("localhost","root","1234","AW");
        $sql = "select * from Album where artist 
        like '%{$_GET['searchSong']}%'";
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
            if($list){
                echo $list;
            };
        }
    }
?>
    <form id="SearchBar">
            <input id="searchbar" type="text" name ="searchSong" placeholder="AW Music">
            <button type ="sumbit">Search</button>
    </form>
    <div class = "search">
        <?php printList() ?>
    </div>

<?php
    include_once "./include/footer.php";
?>

