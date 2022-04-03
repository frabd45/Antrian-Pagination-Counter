<!DOCTYPE html>
<html lang="en">
<head>
    <title>UTS Pemrograman Web</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: poppins, sans-serif;
            
        }

        body {
            background-image: url(d.jpg);
            min-height: 100vh;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            width: 400px;
            min-height: 400px;
            background-color: rgb(14, 50, 67);
            border-radius: 6px;
            box-shadow: 1px, 1px, 5px black;
            padding: 40px 30px;
            text-align: center;
        }

        .box .judul {
            background-color: white;
            color: black;
            padding-top: 5px;
            height: 27px;
            width: 250px;
            border-radius: 3px;
            margin: auto;
            border: 1px solid cornflowerblue;
        }

        .box .no {
            background-color: white;
            align-content: center;
            color: black;
            text-align: center;
            padding-top: 5px;
            height: 150px;
            border-radius: 10px;
            margin-top: 20px;
            padding-top: 50px;
        }

        .no h1 {
            font-size: 3rem;
        }

        .nav {
            padding-top: 25px;
        }

        .nav .prev {
            float: left;
            width: 50%;
            height: 40px;
            background-color: 	rgb(211, 211, 211);
            cursor: pointer;
            font-weight: 600;
            border: 2px solid black;
        }

        .nav .next {
            float: right;
            width: 50%;
            height: 40px;
            background-color: 	rgb(211, 211, 211);
            cursor: pointer;
            font-weight: 600;
            border: 2px solid black;
        }

        .box .text {
            background-color: rgb(218, 165, 32);
            color: black;
            padding-top: 5px;
            height: 27px;
            border-radius: 10px;
            margin-top: 50px;
            
        }

        .nav .next:hover {
            background-color: rgb(105, 105, 105);
            color: white;
        }

        .nav .prev:hover {
            background-color: rgb(105, 105, 105);
            color: white;
        }

    </style>
</head>
<body>
    <div class="box">
        <div class="judul">
            <p>PROGRAM ANTRIAN</p>
        </div>
        <div class="no"><h1 id="counter"></h1></div>
        <div class="nav">
            <button class="prev" id="btn-prev" >Prev</button>
            <button class="next" id="btn-next" >Next</button>
            <script type="text/javascript">

            </script>
        </div>
        <div class="text">
            <p>Nomor Antrian <span id="antrian"></span></p>
        </div>
    </div>
    <script>
         let no=100;
        let next = document.getElementById("btn-next");
        let counter = document.getElementById("counter");
        let antrian = document.getElementById("antrian");
        let prev = document.getElementById("btn-prev");
        var audio1 = document.getElementById("btn-prev");
        var audio2 = document.getElementById("btn-prev");
        var audio3 = document.getElementById("btn-prev");
        var audio4 = document.getElementById("btn-prev");
        var audio2 = document.getElementById("btn-next");
        var audio3 = document.getElementById("btn-next");
        var audio4 = document.getElementById("btn-next");
        var audio5 = document.getElementById("btn-next");

        counter.innerHTML = no;
        antrian.innerHTML = no;
        next.addEventListener('click',function(){
            no++;
            counter.innerHTML = no;
            antrian.innerHTML = no;
            if(no>104){
                alert('Antrian tidak lebih dari 104')
                console.log(no)
            } else if (no==101) {
                const audio2 = new Audio();
                audio2.src = "2.m4a";
                audio2.play();
            } else if (no==102) {
                const audio3 = new Audio();
                audio3.src = "3.m4a";
                audio3.play();
            } else if (no==103) {
                const audio4 = new Audio();
                audio4.src = "4.m4a";
                audio4.play();
            } else if (no==104) {
                const audio5 = new Audio();
                audio5.src = "5.m4a";
                audio5.play();
            }console.log(no)
        });

        prev.addEventListener('click',function(){
            no--;
            counter.innerHTML = no;
            antrian.innerHTML = no;
            if(no<100){
                alert('Antrian dimulai dari nomor 100')
                console.log(no)
            }else if(no==100) {
                const audio1 = new Audio();
                audio1.src = "1.m4a";
                audio1.play();
            }else if(no==101) {
                const audio2 = new Audio();
                audio2.src = "2.m4a";
                audio2.play();
            }else if(no==102) {
                const audio3 = new Audio();
                audio3.src = "3.m4a";
                audio3.play();
            }else if(no==103) {
                const audio4 = new Audio();
                audio4.src = "4.m4a";
                audio4.play();
            }
            console.log(no)
        });
        
        
    </script>
</body>
</html>