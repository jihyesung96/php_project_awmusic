<?php 
    include_once "./include/header.php";
?>
<?php 
    $num = 1;
    $list="";
    for($i=0;$i<3;$i++){
        $conn = mysqli_connect("localhost","root","1234","AW");
        $sql = "select * from Album where no = $num";
        $result = mysqli_query($conn, $sql);
        $row=(mysqli_fetch_array($result));
        $list = $list."
        <div class='hover'>
            <a href='search.php?searchSong={$row['title']}'><img src ='{$row['album']}'>
            </a>
            <p class ='songtitle'>{$row['title']}
            <div id ='bottombar1' ></div>
            </p>
            <p class ='songname'>{$row['artist']}
            <div id ='bottombar2'></div>
            </p>
        </div>
        ";
        $num++;
    };  
?> 
<?php 
    $list1="";
    $arr=[];
    for($i=0; $i<3;$i++){
        $song = rand(1,20);
        while(in_array($song,$arr)){
            $song = rand(1,20);
        }
        array_push($arr,$song);
        $conn = mysqli_connect("localhost","root","1234","AW");
        $sql1 = "select * from Album where no = $song";
        $result = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result);
        $list1 = $list1."
        <div class='hover'>
            <a href='search.php?searchSong={$row1['title']}'><img src ='{$row1['album']}'>
            </a>
                <p class ='songtitle'>{$row1['title']}
                <div id ='bottombar1' ></div>
                </p>
            <p class ='songname'>{$row1['artist']}
            <div id ='bottombar2'></div>
            </p>
        </div>
        ";
    }
    
?>
    <div class="Manager" onclick="location.href='Manager.php'"></div>
    <form id="SearchBar" action="search.php" method="post">
        <input id="searchbar" type="text" name ="searchSong" placeholder="AW Music">
        <button type ="sumbit">Search</button>
    </form> 
    <div id="imgView">
        <div id="imgDivs"> 
            <div id="newAlbum" class="imgdiv">
                <h2>NEW Playlists >
                <div id ="bottombar"></div></h2>
                <div id="newAlbumset">
                    <?=$list?>
                </div>
            </div>
            <div id="todaysong" class="imgdiv">
                <h2>TODAY's Song >
                <div id ="bottombar"></div></h2>
                <div id="newAlbumset">
                <?=$list1?>
                </div>
            </div>
            



            <!--열심히 하는중-->
            <div id ="playlist" class="imgdiv">
            <?php
            if(isset($_SESSION['userid'])){
            ?>
                 <h2><a href="playlistview.php"> My Playlist >
                    <div id ="bottombar3"></div></a>
                </h2>
                <div id="MyPlaylist">
                    <div class="page_one">
                        <main class="page_one__main">
                            <div class="main__singer_info_container">
                                <div class="singer-photo" id ="singer-photo2" >
                                    <img src="./img/화난강아지.jpg"/>
                                </div> 
                                <span class="singer-name"><?=$_SESSION['userid']?></span>
                                <span class="singer-category">Hello, JOIN UP!</span>
                            </div>
                            <div class="main__shuffle_or_heart">
                                <div class="shuffle">유사곡</div>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <span>&nbsp;&nbsp;221,121</span>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div> 
                    <div class="main__playList">
                        <div class="playList__song">
                            <div class="song__album">
                            <img  src ='./img/봄날.jpg'>
                            </div>
                            <div class="song__album_info">
                                <span class="album_info__singer">방탄소년단</span>
                                <span class="album_info__title">봄날</span>
                            </div>
                            <div class="song__ellipsis_container">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>
                        </div>
                        <div class="playList__song">
                            <div class="song__album">
                                <img src ='./img/썸 탈꺼야.jpg'>
                                <div class="song__play_icon_container">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="song__album_info">
                                <span class="album_info__singer">볼 빨간 사춘기</span>
                                <span class="album_info__title">썸 탈꺼야</span>
                            </div>
                            <div class="song__ellipsis_container">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>
                        </div>
                        <div class="playList__song">
                            <div class="song__album">
                            <img src ='./img/취중고백.jpg'>
                            </div>
                            <div class="song__album_info">
                                <span class="album_info__singer">김민석</span>
                                <span class="album_info__title">취중고백</span>
                            </div>
                            <div class="song__ellipsis_container">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>
                        </div>
                    </div>
                    <div class="main__controller">
                        <div class="controller__playing">
                            <span class="playing__singer">노을</span>
                            <span class="playing__title">늦은 밤 너의 집 앞 골목길에서</span>
                        </div>
                        <div class="controller__btn">
                            <i class="fas fa-step-backward"></i>
                            <i class="fas fa-pause"></i>
                            <i class="fas fa-step-forward"></i>
                        </div>
                    </div>  
            <?php       
                }else{
            ?>
            <h2 id = "MyPlaylist_logout"><a href="member/join.php"> My Playlist >
                    <div id ="bottombar3"></div></a>
                </h2>
                <div id="MyPlaylist">
                    <div class="page_one">
                        <main class="page_one__main">
                            <div class="main__singer_info_container">
                                <div class="singer-photo">
                                    <img src="./img/사용자.jpg"/>
                                </div> 
                                <span class="singer-name"><?=$_SESSION['userid']?></span>
                                <span class="singer-category">당신만의 리스트를 만들어보세요!</span>
                            </div>
                            <div class="main__shuffle_or_heart">
                                <div class="shuffle">Sing in</div>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <span>&nbsp;&nbsp;With</span>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div> 
                    
                    <div class="main__controller">
                        <div class="controller__playing">
                            <span class="playing__singer"></span>
                            <span class="playing__title">로그인 이후 이용 가능합니다.</span>
                        </div>
                        <div class="controller__btn">
                            <i class="fas fa-step-backward"></i>
                            <i class="fas fa-pause"></i>
                            <i class="fas fa-step-forward"></i>
                        </div>
                    </div>  
            <?php
                }
            ?>
               
                </div>
            <!--열심히하는중-->
            </div>
        </div>
    </div>
    <div id="prevbtn" class="btn"><i class="fa-regular fa-less-than"></i></div>
    <div id="nextbtn" class="btn"><i class="fa-regular fa-greater-than"></i></div>
    <section> 
<?php
    include_once "./include/footer.php";
?>
<script>
      //변수준비
      const imgDivs = document.querySelector("#imgDivs");
      const nextBtn = document.querySelector("#nextbtn");
      const prevBtn = document.querySelector("#prevbtn");
      //노드의 마지막 자식요소노드
      const lastImg = imgDivs.lastElementChild;
      //노드의 첫번째 자식요소노드
      const firstImg = imgDivs.firstElementChild;
      //노드 복사하기
      let cloneFirst = firstImg.cloneNode(true);
      let cloneLast = lastImg.cloneNode(true);
      imgDivs.append(cloneFirst);
      imgDivs.prepend(cloneLast);
      const slideImgs = document.querySelectorAll(".imgdiv");

      let current = 1;
      let next;
      let prev;
      let timer;
      //스타일 수정하기
      imgDivs.style.width = (slideImgs.length) * 100+"%"; //`${sliderImgs.length*100}%`
      imgDivs.style.left = -(current*100)+"%";
      slideImgs.forEach((img,index)=>{
        img.style.width = `${(100/slideImgs.length)}%`;
        img.style.left = `${index*(100/slideImgs.length)}%`;
      })

      //div가 이동하는 함수
      function divMove(divnum){
        imgDivs.style.transition="0.5s";
        imgDivs.style.left = `${-(divnum*100)}%`;
        current = divnum;
        console.log(current);
        if(divnum == 3){
          console.log("마지막 이미지 입니다.");
          firstMove();
        }
        if(divnum == 0){
          console.log("처음 이미지 입니다.");
          lastMove();
        }
      }
      //마지막이미지일때 맨앞으로 div이동
      function firstMove(){
        setTimeout(function(){
          imgDivs.style.transition ="0s";
          imgDivs.style.left = "0%";
          current = 0;
        },500)
      }
      //맨처음이미지일때 맨뒤로 div이동
      function lastMove(){
        setTimeout(function(){
          imgDivs.style.transition ="0s";
          imgDivs.style.left = "-300%";
          current = 3;
        },500)
      }
      //setInter시작하는 함수
      function startIt(){
        if(timer) stopIt();
        timer = setInterval(function(){
          divMove(current+1);
        },3000)
      }
      //setInterval정지하는 함수
      function stopIt(){
        clearInterval(timer);
      }
      startIt();

      //다음버튼에 이벤트 연결하기
      nextBtn.addEventListener("mouseenter",stopIt);
      nextBtn.addEventListener("mouseleave",startIt);
      nextBtn.addEventListener("click",function(){
        if(current<3){
            next= current+1;
        }
        divMove(next);
      });
      //이전버튼에 이벤트 연결하기
      prevBtn.addEventListener("mouseenter",stopIt);
      prevBtn.addEventListener("mouseleave",startIt);
      prevBtn.addEventListener("click",function(){
        if(current>0){
            prev= current-1;
        }
        divMove(prev);
      });
    </script>