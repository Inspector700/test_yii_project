<?php 
$form = $this->beginWidget('CActiveForm', array(
        'id' => 'user',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => false,
        ),
    'htmlOptions' => array(
        'style' => 'border: solid 1px gray; padding: 20px; background: #eee; border-radius: 4px; margin-top: 10px;'
    )
    ));
/* @var $model User */
/* @var $form CActiveForm */
?>
    <div class="row">
        <?php echo $form->label($model, 'username', array('style' => 'color: blue; width: 100px;;; display: inline-block;')); ?>
        <?php echo $form->textField($model, 'username', array('style' => 'color: red;')); ?>
        <?php echo $form->error($model, 'username')?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'email', array('style' => 'color: blue; width: 100px;;; display: inline-block;')); ?>
        <?php echo $form->emailField($model, 'email', array('style' => 'color: red;')); ?>
        <?php echo $form->error($model, 'email')?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'password', array('style' => 'color: blue; width: 100px;;; display: inline-block;')); ?>
        <?php echo $form->passwordField($model, 'password', array('style' => 'color: red;')); ?>
        <?php echo $form->error($model, 'password')?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'active', array('style' => 'color: blue; width: 100px;;; display: inline-block;')); ?>
        <?php echo $form->checkBox($model, 'active', array('style' => 'color: red;')); ?>
        <?php echo $form->error($model, 'active')?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php
$this->endWidget();
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'country-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id',
        'username',
        'password',
        'email',
        'active',
        array(
            'type'=>'raw',
            'header' => 'Icon',
            'value'=>function($data){
                return '<img style="height: 30px" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQSEhUUExQVFhUXFBgZGBYYFxgYFhgXGRQXFhYcHBUZHCggGBolHRQXITEiJiorLi4uGB8zODMsNygtLisBCgoKDg0OGxAQGy8kICQsLCwsMCwsLCwsLSwvLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAMwAzAMBEQACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAwQFBgcCAQj/xABDEAABAwIEAgcECAQFAwUAAAABAAIDBBEFEiExBkEHEyJRYXGBMkKRoRQjUmJyscHRFYKSoggkM1OyQ+HwFpOzwtL/xAAbAQEAAgMBAQAAAAAAAAAAAAAABAUBAgMGB//EADsRAAIBAwIDBQcDAgMJAAAAAAABAgMEERIhBTFBEzJRYXEUIoGRobHRweHwM0IjUnIGFRY0Q1NiY/H/2gAMAwEAAhEDEQA/ANxQAgBACAEAIAQAgBACAEAxxbF4KVmeolZE3ve4C/kNz6IDOcc6caOM5KWKWpfyt9Ww9/aILj6NWG0t2ZjFyeIrLK1U9KeLz/6NPDA37wJPrmO/ouErqlHqWVHg93U5Qx67fuRr+Isbfe9aGX5Na23ocl1xd/T6Jk2H+ztw+ckhNuK4yNRiLr+IB+Rase3w8Gb/APDdb/OvqOqbjbHIP+pFOPvNbc/DLZdI3tJ89iNU4Ddw5JP0f5LBhPTjkcGV9I6K/wD1IySP/bdrbxDj5KTGcZLMXkq61CrReKkWvU1Dh/iOmrWZ6aZkg0uAe02+2Zp1b6rY4kqgBACAEAIAQAgBACAEAIAQAgBACAEAxxnGIKSIy1EjY2Dm42ue4DcnwCAxziPpgqKpzocLiLG6g1Eg7XmGnss9bnwC51KsKazJkq1s61zLTTjnz6L4lO/9PumkM1ZM+eQ73cbeVzrbXYWCrql9J7QWD01p/s7Tj71d6n4LZfl/QmaWkZGLMY1o8BZQpTlLvMvqVClRWKcUvQWWp2BACAEBxLEHCzgCO4i4WU2nlGs4RmtMllEJLgb4ZBPRSOglbqMpsPK/IeBuCp1G9a2nuedvuAQnmdDZ+HT9jSuj3pYEzxSYgBDUXytk2ZIdgCPdceXI+Cs4yUllHk6tKdKThNYaNXWxzBACAEAIAQAgBACAEAIAQAgBAUXpE6SoMNHVsAmqiOzEDo2+xeRt+Hc+G6GUm3hGNVVPU4jL9IxCQuPuxDRrR3Ae6PDc8yq6ve492n8z03D+AuWKlxsv8v5/BMwQtY0NaA0DYAWCrZScnlnqqdOFOOmCwvI7WDc8zIDuFjnuDWNc5x2a0Ek+g1WUm3hGk5xgtUnheexP0nBVZIL9WGD77gD8BdSY2dV9MFXV43ZweNWfRD09HtV9qL+o/st/YankcP8AiK18H8iNr+EayIXMJcBzjOf5DX5LlO1qx6fIl0eMWdV4U8eu37fUgibGx0I3B0I9FHwWSaayguhkjsbwdlSyx0cPZfzH7jwXehXlSeVyK/iHD6d5DEtpLk/D9i49EnSBI2QYbXu+sGkEzj7Q5MJO5t7Luex13uoTU46ongbi3nQqOnUWGjZFucQQAgBACAEAIAQAgBACAEBl3Sp0lGlJoqLt1bhZzhqIb+HOS2vcNz3LEpKKyzenTlUkoQWWzNMHwXI4zTO6ydxLnOOtid7E7nxVPcXTqbLke34ZwiFqtc95/b0/JLl6iFzkTdKs4MahN06zg11E5wjw6+ukIBLYm+2+3wa3kXfkpFC3dV+RW8R4lG0h4yfJfq/I2HCcIhpmZIWBo5ndx83blW1OnGmsRR4m5u6txLVUeft8EMeMcd+h05kFs5IawHm47nyAuVpcVezhlc+h34bae011B8luxxSY7E+kFVcCPqy93hb2h5gghbRqpw1nKpaThcdh1zj8DXg7iIVsJfoHtcQ5o5a3afhb4Fa29btY5fM7cRsvZaulbprb9fqK8Q8NQVjTnblf7sjdHD/9DwKzVoQqLfmYsuI1rWXuPK6p8v2Max3DZKSZ0Uo1GrXD2Xt5OH7clT1aTpywz29peQuaaqQ+K8H4DNsy54JakRnEGHdewOZpKzVjhodNbX/LxUi2rdlLfkyr4rYK7pZj3ly8/I2Toi4z/iNJllP+ZgsyW+7hs19vGxv4gq6PBNY2Ze0AIAQAgBACAEAIAQAgM96W+Pf4fCIIDermFmAamNpOXOR33uGjmQe5YbxuZjFyeFzMjwHCepBkkOaZ9y5xNyL6kXO57zzVPc3DqvC5HuuFcMjaQ1T77+nkv1JN8yjYLZyG751nBo5Dd862waOQg+oWcGuo+guCMPFPQwM2JYHv8Xv7Tvhe3kArmjDTBI8HxGu61zOXnheiJh9S0LqQjEOk3iE1VWWMP1UPYbb3n++fjp6eKq7mprlhdD2HCbbsaGp85b/Dp+SCjx2ZtI+kv9W6QPPeLa5fIkA+i5do9GjoTXbQddV+qWCT6PuIDR1bS4/VyfVyA8rnsu9D8iV0t6mifqRuJ23tFB45rdfqbsysaVaniyk9MFK19IyYWzRStHiWvu0j45T6FRLuGYZ8C84FXcK7h0kvqv4zIGVCrMHrVIXZOtcGykI4BjP8MxOKqGkUt2TfhcRm+Ya7+VWlnU1R0voeP45aKlW7WPKX36/PmfTzXXFxqDzUwpD1ACAEAIAQAgBACAjOJcbjoqaWpl9mNhNubne60eJNh6oD5soJpKyokr6nV8jjkHJo2FvADQeSrryt/wBNfE9TwGwX/MTX+n8/glJJlXpHpXIaSzrZI5uQ2fMtsGjkJrJqGVAbjwrj3XUcJvq1gY4dzmdk/G1/IhW9GeqCZ4fiFB0biUemcr0Y14px8wQPcD2z2WfiPP039FivU0QyOH2vtFdRfLm/T9yg8F0GefrXatj7WvN52/U/BQrWGqep9D0PGLnsqHZx5y29F/Nh5XcOB1YLD6l5Lz3C3tN9Sfn4Ledt/i7cnuRqPFcWbbfvx2Xn4P8AngI8c4aBIJmjsv0cBtmAsPiB8li7p6XqR04LducHSk91uvT9mWvg3HjLA0ON3x2a7vIHsn1H5FSbarrh5oqeK2vYV213Zbr9UM+kvF/8s2EHtPeCR91lzf8Aqy/NaXc8RwSOB0XKs6nRL6v9smY2VaeqPQ4hBka4uzrIXDmO0PMf9rrtby0VEyFxKj21tJdVuvgb/wBEGM/SsLpyTd0beqd3/V9lt/5cqtzw5dEAIAQAgBACAEAIDDennHHT1MGHRnsi0sxHeb5QfJoLv5h3LSrPRFyJFpbuvWjTXV/TqVfMGgNGgAsB4KjeW8s+hRUYRUY8kNZZllI1chE6rY0PQFgHQCA6DUBK4DjL6V926sd7Te/xHcV1o1nTfkQr6xhdQw9muT/nQts01PWtFze3K9nN9FYPsq6PNL2vh83tjPllP4i2G0rYGZGXIuTc2ub+S6UqapxwiLd3U7mprn6bchz1y6EYQromzMLH7Hu3FtQR4rScFOOlne3uJ0KiqQ5oizWU9ED1YzSEWIvcnuzHkFGcqVBe7zLSNK84i06m0fTC+HiVLEKt8zy95u4/ADkB4KBObm8s9JQoQoQUILZDYtWp2OS1AcuasmGs7M0D/DfVkNrqc7MkjeB4uD2O/wDjYruLykz5/VhonKPg2jaVk5ggBACAEAIAQFK6ROkSHDGZBaWpcOxCDtfQOfbZt+W55d6GUs7IwOir5aqonq5yDK91jYWANhcAcgBYKBezziK9T0nAaGHOq+m35/QdSSXUFI9C2cgIYOgEB0AgOgFgHVkA3lr4m+1I0eF7n4BdI0py5IjVLy3p7SmvmNjj8LTcOdccwD+a6q1q8yJU4vaYw3n4DuLjiRvs9Y4eLQfzUiMK0f7l8SrqVrCo9qT+G36iv/ryb/bf/QFt/jf5kcsWX/an8xtUcYvd7QmA8gB8lzlTqy/vRJpXVnSeVRa9Vn7jePHYTzI8wVxdrUXQsYcYtZc3j1Q+hqGP9lzXeRH5LhKEo80TqVelV7kk/RihatTqckLIOSEBb/8ADy0/TK8jYNaPUyOt+RVzS7i9EeDvP+Yqf6n9zdl0IwIAQAgBACApXSfx23DILMs6plBEUe9uWdwHug/E6d6GUm3hGEU1O9z3VFS4yVDzmLnakE/r+Sq7i4c3pjy+56zhvDFQXaVO99v3EcPZljA7ySfUrnWlqnkm2NPs6CXq/mxyAuRLOwEB2AgG1XiMcXtO1+yNT/2XSnRnPkiHcX1C378t/BcxrDPUz/6EWVv23/udPhddnTo0/wCpLL8EQFeXty8W9PC8X/MfcfRcJyP1nnce9rdvif2XN3sI/wBOPzOi4PWq73FVvyX8/QkabhSmZ7hce9zifkLD5LjK9rS649CZS4LaU/7c+r/i+hIR0ULPZjjb5NC4OpUlzbJsLWhT7sEvgjo1Mbe4eVljEmdVoXI4dijO9OzY1oTdikZ3F/RZ0SMOUXzGs8lO/wBuNp82j9l0i6seTOFShb1O/BP4ETVYFSuN43Pid4G4+B1+BUmN3VW0lkravBraT1U24vyf8+4xeKmDmJmeHtAeW4+a6rsKv/iyM/b7T/2R+v5+47oMVjl0HZd9k7+neuVShOG/NE214jRuHpW0vBjismEbC48h8+QXOEHOSSJNetGjTdSXQ1D/AA9YK6KjmqXgh1TILX5sjzBpt4ue/wCSuksLB4GUnJts1dZMAgBACAEA3r6xkMT5ZDZkbHPce5rQSfkEB8v1GJvxGrlrpubrRN5MaPZA8gfiSoN3Vx7i+J6DgtmpPt5dOXr4nUsl1APSnAasg7AWAczzNY0ucbAf+eq2jFyeEcqtaFKOubwiPgM9WbQjJHsZD89f0CkuNKgs1N34FP291fPTbrTD/M/59EWHCuGIYe0R1j98ztdfAbKJVvKk9lsvIsrThFCh70vel4v8E0TZRC15DSpxBrVuoNmjngjJ8TcdtAuqpo5yqENVY229g4vd3N1+alQtZvd7epU3HF6FPZPU/L8jmjwnEajWKmLGn3pOz69oi/oCt3G3h3pZ9CunxW6qf04pLz/n6EtB0eVzv9SpjZ+EF36BaO5oLlHJwde8lzqY9BdvRlN71Z8Gn91j2yn0ga4uHzqMRqujyaJrn/Tmta0XJeCAB4uJsFlXVOTxoGq5gsqqytMjnz5IpqeoNzZrXWcfLOG5j4NJXd06TWXFx/nxM0+J3UXhSUv58Dr+JZHZJ43wu+8CPzF1zds2sweSyo8Zpt4rJxf0PazDGTDMwgO5Obz87LWnWlTemXLwO91Y0bqPaU3iXRoRwiNklXDFiUr46fN2nNFwe7UbA7F24CnUVS70Dz1/K7TVOu+XLwfn5n1nhscTYo2wBoiDGiPJbJksMuUjS1rLuVw5QAgBACAEBn/TnXmLCZQDYyPZH5guu4fAFAYpTtyRsaOTR+Wqpaj1TbPfWtNU6MYrwR00LQ7nNRJkbm5DfwHM+i2hHU8HKvV7KGt8lz9PH4HFTiDI2ZiQbjsgc1vCjOcsYOFe+o0aetvOeWOojguG/S3dbO4BgPZjDhr58wPmV1rVewWimt+rKy1t3fz7a4l7vSOf5+WXSINaA1uUAbAWsFWPLeWemhoitMcJI9dK0bkfELGlmXOK6kJimORNuOsb5A3PwCk07epLoQq3ELan3pr7/YrFVxAPdBce86D4KbCzf9zKavx2C2pLPrsiHqsQkk9p2ncNApkKMIckUdxfV6/flt4dDQOj7imhiLY5KdsLzp1984J+852rPTQeChXVvVlunleBmhVprZrHma2NdRrfmqksMhlQHhagMe4zxCoxOqdTUjXPiiNuzo1zgbOc5xsAL6C/nzVxbwhQhrnzZX1pSqy0x5IYydGNc1uYdUSNcrZO1fzIAv6rdX9JvG5r7JUW5a+Eqr6Ux9DiEV5om6CRvacwaXB3uNNRvcHvUS4j2bVWk9n4EmjLWuzqLdFN4twl+GVNoiepf2mZtR4tPeR3+IUujKNzD3uaNVWq2dTNN7Pp0O4Z46lpY4WcPaYfaB2JCjyhOhLKPQUbi34hT0SW/VdV5ovHQ3xbLS1Qw6dxdDLfqHHdj97A/ZNjpyNrbqwpVVUjk8ze2krapofLo/I3pdSICAEAIAQFD6bMLdUYVNlF3RFsvo09v+0lAYVh8+djXeFj5jRU1WDjNo93ZVlWoRkvD6nU9fHH7TwD3bn4BI0Zz5IVr23o7Tks+HN/QQ/jkB0JNvFpsunstVbkX/fFpLZt49Ge0XCrJB1mc9UdWAaG3ryXV3co+61v1KOrZ0teacsx6fjcsGC8I0MzuqkErHn2S2TRxt3FpsVxld1YrKwaey0ybPRTTe7NO31b+y09vn1SHsyXJs7i6KKT3nzu/maP/qsf7wqdEjHssOrYpX8DUlPH9RS9dUO7MYkc5zcx954uGhrRqbjlbmkbqpN+9LC64EqMIrZZYjgXRVAztVRMzzqWtuyMHwDbE/IeCzUv5vaGy+prC2iu9uW2m4IpCLMooSBz6pp/uIXKM7ifdbZ0caUeaRDY90U0kgJET6d595hOW/4DdtvKy7K5uKXfW3n+Tm6VKfdE+DoqiicKKp7bLH6PMPZcBqYz9lwGoB5A22XK4cKq7SHPqv1N6WqHuS+BcMqiEjI0xSN7onti0e5uVpOzSdM3pe/otoNKSb5GJZxsdcLcKthiEUDbNHtPdu53MuPMn5eCkqnVuZav/hyc4UVgmZ+H5ALgtd4DQ/NdJ2FSKytzWN3BvfYrldhbHyMe4WkiddrtnC4s5p72kbg+B5KIpSinEktKWGVrpOwnr6JzgO3Cesb5DR4+Bv5gKRZVNFXHjscrqGqn6EfgnCrMdoW1MD2w4hDaOU7MmLW9hzwNnOba7gNSDe6u2k1hlXCcoS1ReGSHAXRhXCujqK8MYyA3aGua50jh7J7FwG89bHQaLSnSjT7p3uburcNOo+RuK6EYEAIAQAgOZIw4FrgCCCCDqCDoQR3ID5bxbhgnFJqLC3mSPNqSezFr2wZDuGbX3NralR67pxWufQlW9xWppwpvCfM0nAei2ip2gyt+kS83SXyX8I72I/FdVVW+qT7uyN40lze5I4hw3RNjcTSwZWNcbdUzQAXNtPBcVWq57z+ZIVOHgigGUBoAAAA0A2A7gF2w29zvslhDGSctcHN0LSCPMG4W6RozW6GYSRseNnNB+IuoTWHgzkcBqwYOg1DGSQwqg6w3d7I+Z7lMtLbtXmXJHCvV0LC5lja0AWAsFdpJLCK9vPMYz4rAHGN8jAdiCfz5LurWrOOdOUcu3hGWM7kTiuHhtnNsWE3HOx5Lz15bdjLK5P6FpQra1h8xgWqESMilLTZ3ho5n5c10pU3Umoo1nPTFssVbUtpos2UlrbAhtrgbX1/81Xp7a3UmqcdinrVdKc3ucYXjUVRownMN2kWNv1Hku1e1qUe8tvE50q8KnIZcSUIt1gGuzv0P6Kjv6Cx2i+JaWlXfQ/gVatp88b2faa5vxBCrIvDTJzWVgzn/AA94mYcRlgv2ZonAj78ZzNPwLx6r0yKM+jUAIAQAgBACArXSPjpocOqJ2mzwzLGe6R/ZafQm/ogKF0U4MKakEjtZp+29x3t7jb+FyfNxVFe1XOpjoiwo0tMc+Jd3SqGdcEPxI7/Kz2/2ZP8AgVvDvI3RkIqlO0jI3mnWyRq2a/wjc0VOT/tN+FtPkoFXvsyiZDVzB0GoYyWiihyMaPDXzOpXo7en2dNRKypLVJsRfi0Ie5jpGtc21wTbcA7nfdTVbVXFSUcpnB1oJtN8iicWYhHJMXtIytaAX7A2vc68tbX8FeWVOVKjifr6FZcTU6nuifCHE0UpNO2ZkjXbAOBLHbtPkSLKv4pQpXNGTg05LwJNnVnRqJSWzJ0tXgz0mRriePMoInTvIGoaL3O5u6wGpOgGnerrg1CE5ynUeEl9yDf1ZRjGMVltkOzpMhxFjooBldbtB2jsoPId17L0tjRpOpqUstdORUXVSenDWMiFNUOjcHtNnNNwrecFOLjLkyBGTi8o0tsgnp8w2fHe3cbbehXkrqjjVTfmX1CpnTNFPsvLl4Yj0YPLccp7aXnePTK/Remj3UUkuZ9VrYwCAEAIAQAgMw/xCuIwwa71DL+OjigFcJltFGBsGNH9oXmZ95l5p2RICZamNIjUWc1zTs4EHyIsfzWVsMGG10L4ZHxuBuxxHnbY+o1VnFqSyjg8rYRia+RwY0EucQ0eZNh+azst2YN/wyk6qKOMe4xrfgLKrk8ts3HgC1ArE3UeYW0N5L1NZPYtC9OVZlVfKXyPcdy9x+a9XSjpgkvAopvMmym8ZYvFFJBHUNc6F2Z0jWnUhtg0Hwub+iruKVGkoLqTLKCbcjOYsUEFWJ6YFjWSBzBfXKDsfAqohNwllE+UdSwfULH5gHDZwB+IuvLVFibXmWsXsjM+lzHZKWakLWtcAJXZXi7SdG3t5FWnDX7kl5oi3PNMzPhWrd9PieNC+U3A0FnXuLd2qu7OTVaOCBcJOmzaF6YpjQuEXXpW35Fw9Lled4gkq7Le0f8AhIrc0wB1714tnpIpsxTCZBh+MNqZWnqGVjxmHIOBLTbf2ZA70K9BQqKUIrrhFTWpSjJtrqfU7HhwBBBBFwRsQdiu5xOkAIAQAgBAUTprwsz4TNlFzEWy+jT2v7SUBUOEsUE1LC+/uAHwLeyfyXnriGio0X9GWummT7ZlxNtJ6ZUMYIDH8BZUHP7L7WvbQjlcfqusKjjsYdNMkOD+DY4SJnnO/wBwWsG8r+JSpWctiPNaXhFz6sLgc8nmRDOTqPQjzWYvDTNXyLINQvTp53K0yqviLZHtO4e4fMr1tKWqCa8CimsSaM86VMPc5kUwFwwlrvAOtYn1FvVVvFKbaU10JllNJuJQcKw99RNHCwXc9waPC51PkBqqeEdTwWEnhZPqM1TY2hjWvkLQBlY2+wtbMSGj1IXmGtUmyyTwijdJGB1GIxMEdMWPjcS0vli1BGoIaT+fJTrOvSoqSk85xjCOVWlObWEUTAuGpqGoE1XTy5WDsmMNkGY6XOV17AX5K5sb22VRSlIhXNtWcMRRf8NxWGoF4ZGv7wNHDzadQvUU61OosweSknTlB4kjUaVn0ej7WhbGSfxHW3xNl5m/rKUpz6F3aUn7sDPZJCdyvKnp0kQ/EGGsqIHxOLQX+ySQO2PZ/b1XehNwmpI5XFNTg4st3Qdj5qcPETz9ZSu6p198lrx/K7f5Sr888aIgBACAEAIBOogbIxzHgOa5pa4HYtIsQfMFAfO8NK7Bq+SimJ6iV2aCQ7amzbn4NPcQDooN5b61qjzROsrjs3plyZcySN1UYLjZh1ywNJ4H3IA3OiDGCdxTEW0lM+Vwu2KO9hzI0A9SQPVKcHOSiupXTfNlN4W6VGTyiKojEJcbNeHXZc7B19R3X2UurZOKzF5OMameZo+dQTrgM6DBOYXUZ2eI0P6K+squunjqiDWhpkVjjLCCHdewXBtntyI0B8tl6Xh1ynHspc+hUXdF51r4lTkYHAhwBBFiCLgjxHNWjSawyCnjkS/CvCcEB61sTGPOoyixHr+my8VxXicVKVG2WFybXXyXkX1paywqlXd9F4fuWp8QAXnCxTGM7Vk6xZHVAWTvEp/EHDLJHddCeoqWm7ZWdkkjUZgPaGgUy3vKlF89jnWtYVVy3HWFdIEtVGaKqbkqoj9Y4WDZWt2IA57E8tiOYEu9qOVJOPJnCzpqNVqXNCsjrbqqLYyDibFzUzOdc5ASIx3NB38zurmhT7OOPmU9eq5yz8jQOgmtczEpoze1RTCTze0tNz/VJ8VKpv3SJVXvG+rc5ggBACAEAICvcbcIQYnB1Uws4XMcg9pjrbjvHeOaAx6V9fgp6quidUUoNmVDNcrb2Gp/4ut57KHXs4z3jsyZQu5Q2lui2YPU09WzPTyNeOY2c3wLTqFVzoyg8SRZwrxmspknT0Qa655LlITnlYIjpIdfDp/Jl/LrGrra/wBVEWovdMGcFcJkRo2Xow4vE8X0eZ466PRpcdZGct93Db4Kru6Gl6o8mSKcsrDL6XqEdcClNVmN2Yeo5ELrRqypS1RNZ01NYZOwYtE8akNPMO/fYq6pXtKS54fmQZ2810yRWJto22ysYZHGzco0Byl1yBoNGldbjis1ScYVMvH83OdOxi5puIlFMvNlk4ijqhDXSNZpUOkUR871k7RRG1Dlsdooz/j9pgkp6xmjmyZHW94WLgPgHBWFn78ZU2Q7z3JRqIT404pblMELrk+28bAfZB71i2t3nVI2ubhY0xKE1pOwuTsO88lPyQEjYOB6MQ4/BEPcw8NdbvDNfmsWstUG/NmLpYnjyRuakkYEAIAQAgBACA5ewEWIBB3B1B9EBg2JYRDT8RSRhgjZJEJIxGXRAOygnKIyNOy/TzUO9yqWUSbXDqYZfQ9UZZ4GPEFH9Ippohu+NwH4rXb8wFvTlpmpGso5WD5/kjIJBFiNCO4jcK6TIbQiRY3G63yc2i1YD0gVdNZrndcwe7ISXAeEm/xuo9S1pz3Wz8jpGrJF7wrpKpZbCTPC77wuz+tu3qAoU7OpHlud41ovmWelxGOUXjkY8H7LgfyUaUJR5o7Jp8hhxJV9TGyblFMxzvwOvE8+glJ9F0ox1Nx8V+/6GtTZZ8CWjqdLg6Llg30nZqFgxpEZJ1k2URpNMh0URm91zYLJ1SwUzpdlDKaCH33y57c7NY5vzMnyVjYR95y8itv55Sj5mcNaprZFSLV0eYP9IrGXF2x/WO7uyeyP6rfBR689MGd6UMyNE6MmfScdr6gashj6oHucXBnwPVSKTbx000iJcS1VGzZV3OIIAQAgBACAEAIDIOnTD3Qy0eJxjWF4jktzYXZm+mr2/wA60qQ1wcX1N4S0yUiUpapsjGvabtc0OB7wRcLzkk08Mu1hrKFw9YGDL+kTh0xyGojH1bz2gPcfz9D+d1PtquVpfMj1YY3KQ5imJkdoScxbJmrRxZbZNcHUcpabgkHvBIPxCYyMkhHj9SGlnXylpBBa55e0gixGV1xZaOlDOcI27SWMZLHwZxx1AbT1JJjGkcm+Ucmu55RsDy8to9xa6/fhz6o60LjR7k+XRmkQV7XtDmODmnYg3HxVa4tPDLGKTWUDqhYN1E5bG52yzgzshLGMXp6CPPO7tW7MY1kefAch4nRd6VCVR4RGrXEYLcxjGsWlrp3Ty6X0YwbNaNgP35lWqjGnHRErMyqS1yEWRrRs6pGr4dAMHwySeSwnkA055yCI2fy3JPqon9aoorkdpPsqbfUufQlgBpcObI8fWVJ65198pH1d9Ps6/wAxVuVRoCAEAIAQAgBACAEBH4/hLKunlp5fYlYWnvFxo4eINiPJAYbwlVSUM8mGVRs+Nx6lx2e06gDwI1HmRyVXfW//AFI/EsbOt/Y/gXYPVYWGDmUBzS1wDmkWIIuCO4hZW3IxgpOMcANcS6neGX9x9y30cNQPQqXC6x3kcZUPArGMcJT08ZkkyFoIHZcSddAdhopEK8ZPCOMqLissr7mLvk44ODGs5MYOTGs5MaTwxLOow4ndJNLCbwyvYe4EgHzGx9VmWmW01kxFThvB4J6l43rmC14n+LmC/wArLg7agzsriujyr42xCQECURA/7bQ0+jtSPQraNGhHpk0lUry64IIwlzi6RznuO7nEkn1O66OpthbGqpb5e5IUeFzSECOKR19rMJB9bWXFyS5s7KLNO4I4E6gioqsuZou1m7Wc8zjsXfIKLUq6toneMMbsQpIDxBiTWgH+H0jrud7srr7eOa2nc0Ha6sLaj2ccvmyvuKuuW3I3ZrQBYaAbBSSOeoAQAgBACAEAIAQAgKN0ocBNxKISRWZWRC8Um2YA5sjnDle5B5E+JRrITwZ1wzxQ5zzS1jTFVRnKQ7TOR+Tvz3Cprq0dP3o8vsW9tdKfuy5/ctWdQibg9zoMDfEKds0b43+y9pB/Q+YNj6LMZOLyjDjlYMfxOgfBI6N41HPkRyI8CrSElJZRAlFxeGNMq2ya4PMizkxgMiZGAyJkxgMiZM4PbLGTOCa4X4ekrZQxtwwe2+2jR3fiPILSc1BZZtGOWbjR0kdPEALMjjYBcmwDWjcn9VB3kyQ2kigYpilRjk5oMPu2nBHX1BvlLb/8d7N3dbkLqztrbR70uZXV7jV7seRsnC/D0NBTsp4BZrRq4+093vOcRzKmkQlkAIAQAgBACAEAIAQAgBAU/j7o+p8TZd31VQ0dido7QtsHDTO3w5crIDJqqtrsIe2HEYy+K9mVDO0COXa97yNjpzVfXsVLeGzLChfOO090WPD8Uinbmie148DqPMbhVk6coPEkWcJxmsxeR1nWh0wRWNUENTaOT27EtI9oAEA28NRoutOcoe8uRznCMtnzKZXcH1DD2AJByLdD6tP7qXG4g+exFlQkuW4ybw7VE26h/wAv3W/aw8Tn2cvAnsH4CleQZ3Bjfsg3cfXZq4zuYrunSNF/3FrreD6eWNrMoZlFmubo4D9fVR415ReTrKMWsYK7N0ayX7E7CPvNcD8ibruruPVHB0h9hfRuwG88xePssblHq4kk+gCw7vwRlUvEmcY4opcJyxdUchiLmNjAuXh4aQSe8G9z9k76BbUqUq+6ZpVrKlsMaHhvEcdc19Xekob5hGL53jcdk7/idYdwVlRt40+XMgVa0p+hsGA4JBRQthp4wxjeQ3J5lx3c495Xc4kigBACAEAIAQAgBACAEAIAQAgEaulZKx0cjGvY4Wc1wDmkeIOhQGY8R9C8D3GWgldSS8mi5j9LHMz0JHgsSipLDMxk4vKZVqvDMaof9WmbVsHvxautfuaM39qhzsacuWxNhf1I97crc3GTTW073RvhyB8czH8g8jXkdCATcDZaexuNOUefVG/tqlUjLl0ZorhbUag7FVTRbJ5O2PWDDQsx6GjQs2RYNcHYkQxg96xBggOCAMQxt8uUPgo4S0OIBb1xcACL8/bsfu+KvLOk4U9+b3Ki6qKc9uhtClkYEAIAQAgBACAEAIAQAgBACAEAIAQAgBAQnF3DMOI0z4Jh7Q7LwBmY4ahzT+nMXCAxPr6nBXClr43Op7kQ1LblttwPK3u7i2lwoNzaa3qjzJ9teaFplyLDRV8UwvDIx47gRf8Ap3VXOnKHeRawqwn3WOmvXM3wKtehrgaYhjUMAvLKxvgT2v6d1vClOfdRznUhDvMr8VbWYw40+HxuZDfLJVPuABzA7tOQ7WvJWdvZaXqnz8Ctr3mr3YfM2TgrhWLDaZsEWp3kkIsZHkauI5dwHIABWBAJ5ACAEAIAQAgBACAEAIAQAgBACAEAIAQAgBAJVVMyVhZIxr2O3a4BzT5g6FAZvxR0RYa9rpGMkgcLn6p9m6D7Lg4AeVkBhePTy0spjjqJ8o2vI79LBc3Sg+cV8joq1RcpP5inDfWVkojmnnykjaQ87/auOSyqUFyS+QdWb5yfzN24a6IsNhAe6N8zt/rnZhr91oa0/BbnM0OngbG0MY1rWtFg1oAaB3ADQIBRACAEAIAQAgBACA//2Q==">';
            }
        ),
    ),
)); ?>

