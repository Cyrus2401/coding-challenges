$(document).ready(function(){
    $('button').click(function(){
        if($('button').attr('class') == 'btnLampOff')
        {
            $('.lamp').attr('src','images/lampOn.gif');
            $('button').html('Eteindre la lampe');
            $('.btnLampOff').attr('class','btnLampOn');
        }
        else
        {
            $('.lamp').attr('src','images/lampOff.gif');
            $('button').html('Allumer la lampe');
            $('.btnLampOn').attr('class','btnLampOff');
        } 
    });
});
