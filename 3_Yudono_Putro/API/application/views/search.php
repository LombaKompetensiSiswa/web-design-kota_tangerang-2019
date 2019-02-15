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

        <h1>Route Search</h1>
        <select name="" id="">
        <option value="">----From----</option>
        <!-- <option></option> -->
        </select>
        <br>
        <button class="btn" onclick="window.location.href = 'places'">Back</button><br>
        <button class="btns" onclick="logout()">Logout</button>
    </div>

    <script src="http://localhost:8000/assets/js/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        var token = window.localStorage.getItem('token');
        if(token == ''||token == undefined||token == null){
            window.location.href = 'http://localhost:8000/';
        }
        $.ajax({
			url: 'http://localhost:8000/v1/place?token='+token,
			data: {},
			type: 'GET',
			dataType: 'json',
			success: function(res){
				// alert(res.response);
                out(res.data);
				// console.log(res);
			},
			error: function(res){
				alert(res.response);
				console.log(res);
			}
		    });
    });
    function out(data){
        console.log(data);
        var canvas = $('.canvas');
        data.forEach(function(b){
            var x = b.latitude;
            var y = b.longitude;
            var name = b.name;
            canvas.html(canvas.html()+`
        <div class="loc">
        <div class="pin" style="top: `+y+`px;left: `+x+`px;"></div>
        <div class="label" style="top: `+y+`px;left: `+x+`px;">`+name+`</div>
        <input type="hidden" class="values" value="`+x+`,`+y+`">
        </div>
        `);
        });
    }
    </script>
</body>
</html>