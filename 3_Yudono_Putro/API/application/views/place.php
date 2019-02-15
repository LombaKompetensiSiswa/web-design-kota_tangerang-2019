<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
}
.canvas{
    width: 800px;
    /* float: left; */
    position:relative;
}
.canvas img{
    width: 800px;
}
.list{
    width: 100%;
    float: left;
    padding: 10px;
}
.item{
    width: 100%;
    background: #333;
    padding: 10px;
    color: white;
    font-family: sans-serif;
    border-radius: 6px;
    margin-bottom: 6px;
}
.item:after. .item:before{
    content: '';
    clear: both;
    display: table;
}
.item input{
    border: 0;
    border-radius: 20px;
    padding: 4px;
}
.item i{
    font-size: 18px;
    float: right;
}
.pin{
    position: absolute;
    content: '';
    display: table;
    clear: both;
    background: red;
    transform: translate(-50%, -50%);
    width: 10px;
    height: 10px;
    border-radius: 100%;
    /* top:50%;
    left:50%; */
}
.label{
    font-family: sans-serif;
    position: absolute;
    content: '';
    display: table;
    content: '';
    display: table;
    background: white;
    box-shadow: 0px 0px 5px grey;
    /* top:50%;
    left:50%; */
    margin: 6px;
    padding: 4px;
    border-radius: 6px;
    z-index: 1000;
    border-top-left-radius: 0px;
}
.btn{
    background: dodgerblue;
    border: 0;
    color: white;
    padding: 10px;
    border-radius: 10px;
    margin: 10px;
}
.btns{
    background: red;
    border: 0;
    color: white;
    padding: 10px;
    border-radius: 10px;
    margin: 10px;
}
</style>
<body>
    <div class="wrap">
        <div class="canvas">
            <img src="http://localhost:8000/assets/map.png" alt="maps">
        </div>

        <h1>Create Place</h1>
        <div class="list">
        <!-- <div class="items">
            <div class="item">
                <label>Cord(12,12)</label> 
                <input type="text" placeholder="name" onkeyUp="changes(0, this.value)">
                <i>&times;</i>
            </div>
        </div> -->
        </div>
        <br>
        <button class="btn" onclick="save()">Save</button><br>
        <button class="btn" onclick="window.location.href = 'search'">route search</button><br>
        <button class="btns" onclick="logout()">Logout</button>
    </div>

    <script src="http://localhost:8000/assets/js/jquery.min.js"></script>
    <script>
    var i = 0;
    (function(){
        var token = window.localStorage.getItem('token');
        if(token == ''||token == undefined||token == null){
            window.location.href = 'http://localhost:8000/';
        }
    })();
    $('.canvas').click(function(e){
        var x = e.clientX || e.pageX || e.offsetX;
        var y = e.clientY || e.pageY || e.offsetY;
        // console.log(x);
        // console.log(y);

        var canvas = $(this);
        var list = $('.list');

        canvas.html(canvas.html()+`
        <div class="loc">
        <div class="pin" style="top: `+y+`px;left: `+x+`px;"></div>
        <div class="label" style="top: `+y+`px;left: `+x+`px;"></div>
        <input type="hidden" class="values" value="`+x+`,`+y+`">
        </div>
        `);

        list.html(list.html()+`
        <div class="items">
            <div class="item">
                <label>Cord(`+x+`,`+y+`)</label> 
                <input type="text" placeholder="name" onkeyUp="changes(`+i+`, this.value)">
                <i onclick="deletes(`+i+`)">&times;</i>
            </div>
        </div>
        `);
        i++;
    });
    function changes(id, val){
        document.querySelectorAll('.label')[id].innerHTML = val;
    }
    function deletes(id){
        document.querySelectorAll('.loc')[id].innerHTML = '';
        document.querySelectorAll('.items')[id].innerHTML = '';
    }
    function save(){
        var pin = document.querySelectorAll('.pin');
        var label = document.querySelectorAll('.label');
        var values = document.querySelectorAll('.values');
        
        var ck = true;
        var pins = [];
        var labels = [];
        for(var i = 0;i < pin.length;i++){
            if(label[i].innerHTML == ""){
                ck = false;
            }
            labels.push(label[i].innerHTML);
            pins.push(values[i].value);
        }

        if(ck){
            //benar

            // console.log(pins);
            // console.log(labels);

            for(var i = 0;i < pins.length;i++){
                var pin = pins[i];
                var a = pin.indexOf(',');
                var x = pin.substr(0, a);
                var y = pin.substr(a+1);
                var name = labels[i];
                add(name, x, y);
            }

        }else{
            alert('Empty name');
        }
    }
    function add(name, x, y){
        var token = window.localStorage.getItem('token');
        $.ajax({
			url: 'http://localhost:8000/v1/place?token='+token,
			data: {
				name : name,
                latitude : x,
                longitude : y,
                x : x,
                y : y,
                image : '',
                description : ''
			},
			type: 'POST',
			dataType: 'json',
			success: function(res){
				alert(res.response);
				console.log(res);
			},
			error: function(res){
				alert(res.response);
				console.log(res);
			}
		    });
    }
    function logout(){
        var token = window.localStorage.getItem('token');
        if(token == ""){
            alert("Token not valid please login");
            window.location.href = "http://localhost:8000";
        }else{

            $.ajax({
			url: 'http://localhost:8000/v1/auth/logout?token='+token,
			data: {},
			type: 'POST',
			dataType: 'json',
			success: function(res){
				window.localStorage.setItem('token', '');
                window.location.href = "http://localhost:8000";
				console.log(res.response);
			},
			error: function(res){
				alert(res.response);
				console.log(res);
			}
		    });

        }

    }
    </script>
</body>
</html>