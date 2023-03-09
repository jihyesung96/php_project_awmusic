<?php 
    include_once "./include/header.php";
?>

<?php 
    $conn = mysqli_connect("localhost","root","1234","AW");
    $sqltotal = "select * from Album";
    $resultotal = mysqli_query($conn, $sqltotal);
    //mysqli_num_rows() => 조회한 레크드의 수 
    $total = mysqli_num_rows($resultotal);

    //페이징 처리하기
    //한페이지당 레코드 개수 5
    $list_num = 5;
    //한블럭당 페이지수 
    $page_num = 3;
    //현재페이지
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    //전체 페이지 수 : 전체 레코드수/ 페이지당 레코드수 
    // ceil : 올림 , floor : 내림
    $total_page = ceil($total/ $list_num);
    //전체 블럭수 : 전체 페이지 수 / 블럭 당 페이지수 
    $total_block = ceil($total_page/ $page_num);
    //현재 블럭 번호 : 현재 페이지 번호 / 블럭 당 페이지 수
    $now_block = ceil($page / $page_num);
    //블럭당 시작 페이지번호 : (해당 레코드의 블럭번호 - 1) * 블럭당 페이지 수 + 1
    $s_pageNum = ($now_block-1) * $page_num + 1; 
    //레코드가 0개인 경우
    if($s_pageNum <= 0) {
        $s_pageNum = 1;
    }
    //블럭당 마지막 페이지번호 : 현재블럭번호 * 블럭당 페이지수 
    $e_pageNum = $now_block * $page_num;
    //마지막 번호가 전체 레코드 수를 넘지않도록 지정
    if($e_pageNum > $total_page){
        $e_pageNum = $total_page;
    }
    //시작번호 : 현재 페이지 번호-1 * 페이지당 보여질 레코드 수 
    $start = ($page-1)*$list_num;
    $sql = "select * from Album limit {$start}, {$list_num};"; 
    $result = mysqli_query($conn, $sql);
    $list="";
    while($row=(mysqli_fetch_array($result))){
        $list = $list."
        <li>
            <img src ='{$row['album']}'>
            <p><a href='detailview.php?no={$row['no']}'>{$row['title']}</a></p>
            <p>{$row['artist']}</p>
            <p id='Lovesong'>▶ 미리듣기</p>
        </li>
      
        ";
    }
    
    
?>
    <form id="SearchBar" action="search.php" method="post">
        <input id="searchbar" type="text" name ="searchSong" placeholder="AW Music">
        <button type ="sumbit">Search</button>
    </form> 

    <div id="playlistview"  >
        <h2>My Playlist</h2>
        <div id="lovesong">
            <ul class="animalList">
            <?=$list?>
            </ul>
            <div id="page">
            <?php
                if($page<=1){
                    ?>
                    <a href='playlistview.php?$page=1>'><i class="fa-regular fa-less-than"></i></a>
                    <?php
                }else{
                    ?>
                    <a href='playlistview.php?$page=<?=$page-1?>'><i class="fa-regular fa-less-than"></i></a>
                    <?php
                }
            ?>
            <!--페이지 번호 출력-->
            <?php
                for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
                    ?>
                    <a href='playlistview.php?page=<?=$print_page?>'><?=$print_page?></a>
                    <?php  
                }
            ?>
            <?php
                if($page >= $total_page){
            ?>
                <a href = 'playlistview.php?page=<?=$total_page?>'><i class="fa-regular fa-greater-than"></i></a>
                
            <?php
            }else{
            ?>
                    <a href = 'playlistview.php?page=<?=$page+1?>'><i class="fa-regular fa-greater-than"></i></a>   
            <?php
                }
            
            ?>
            </div>
        </div>
    </div>
<?php 
    include_once "./include/footer.php";
?>