<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <script src="https://kit.fontawesome.com/f3283b4248.js" crossorigin="anonymous"></script>
    <title>Rating System</title>
</head>

<body>
    <div align="center">
        <h1>Rating System Example</h1>
        <i class="fa fa-star" data-index="0"></i>
        <i class="fa fa-star" data-index="1"></i>
        <i class="fa fa-star" data-index="2"></i>
        <i class="fa fa-star" data-index="3"></i>
        <i class="fa fa-star" data-index="4"></i>
        <p id="rate0">"Please contact us."</p>
        <p id="rate1">"Let us know how we can do better."</p>
        <p id="rate2">"Tell us how we can improve."</p>
        <p id="rate3">"Thank you for your feedback."</p>
        <p id="rate4">"Thank you!"</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var ratedIndex = -1;

        $(document).ready(function() {
            resetColors();
            resetRating();
            

            $('.fa-star').on('click', function (){
                // This keeps the clicked star yellow
                ratedIndex = parseInt($(this).data('index'));
                localStorage.setItem('ratedIndex', ratedIndex);

                switch($(this).data('index')) {
                    case 0:
                        resetRating();
                        $('#rate0').show();
                        break;
                    case 1:
                        resetRating();
                        $('#rate1').show();
                        break;
                    case 2:
                        resetRating();
                        $('#rate2').show();
                        break;
                    case 3:
                        resetRating();
                        $('#rate3').show();
                        break;
                    case 4:
                        resetRating();
                        $('#rate4').show();
                        break;
                }    
            });
            
            $('.fa-star').mouseover(function() {
                resetColors();

                var currentIndex = parseInt($(this).data('index'));

                for (var i = 0; i <= currentIndex; i++)
                    $('.fa-star:eq('+i+')').css('color', '#fd7');
            });

            $('.fa-star').mouseleave(function() {
                resetColors();

                if (ratedIndex != -1)
                    for (var i = 0; i <= ratedIndex; i++)
                        $('.fa-star:eq('+i+')').css('color', '#fe7');
            });
        });
        function resetColors() {
            $('.fa-star').css('color', '#ECECEC');
        }
        function resetRating() {
            $('#rate0').hide();
            $('#rate1').hide();
            $('#rate2').hide();
            $('#rate3').hide();
            $('#rate4').hide();
        }
    </script>
</body>
</html>