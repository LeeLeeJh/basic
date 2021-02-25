<!-- <a href="pop.php" onclick="window.open(this.href,'_blank','width=500px, height=600px, left=45%, top=40%, toolbars=no, scrollbars=no');
return false;">버튼</a> -->

<button onclick=popup();>버튼</button>

<script>

  function popup(){
    cw = 440;
    ch = 600;

    sw = screen.availWidth;
    sh = screen.availHeight;

    px=(sw-cw)/2;
    py=(sh-ch)/2;

    test=window.open('pop.php','리뷰등록','left='+px+',top='+py+',width='+cw+',height='+ch+'');
  }
</script>
