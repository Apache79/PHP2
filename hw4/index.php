<?php
include 'query.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>

    <script>
        $(document).ready(function(){
		
            $('#show_more').click(function(){
				var btn_more = $(this);
				var count_show = parseInt($(this).attr('count_show'));
				var count_add  = $(this).attr('count_add');
				btn_more.val('Подождите...');
				
				$.ajax({
                    url: "ajax.php",
                    type: "post", 
                    dataType: "json", 
                    data: { 
                        "count_show":	count_show,
                        "count_add":	count_add
                    },
                    success: function(data){
						if(data.stm == 'success'){
							$('#content').append(data.html);
							btn_more.val('Показать еще');
							btn_more.attr('count_show', (count_show+25));
						}else{
							btn_more.val('Больше нечего показывать');
						}
                    }
                });
            });
			
        });		
    </script>
</head>

<body>
<div id="content">
<?php foreach($allGoods as $good): ?>
    <div class = "good">
        <p><?=$good['title'];?></p>
        <p><?=$good['desc'];?></p>
        <p><?=$good['price'];?></p>
    </div>
<?php endforeach; ?>
<input id="show_more" type="button" value="Показать еще">
</div>
</body>
</html>