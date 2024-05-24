<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ajax</title>
	<script type="text/javascript">
	function ajx(fl,v){

			http = new XMLHttpRequest()

			http.onreadystatechange=function(){
				if(this.readyState==4 && this.status == 200){
					if(v==1){
						alert(this.responseText)
					}

					if(v==0){
						return this.responseText
					}

				}
			}
			http.open('Get',fl,true)
			http.send()
					}
					ajx("chat.php",1)
	</script>
</head>
<body>
	<div id="tst">me muda</div>
	<button id="dd">click</button>

</body>
</html>