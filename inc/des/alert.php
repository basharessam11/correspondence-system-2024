<?php


           if (isset($_GET['file'])=='exe') {
          echo '<br><br><div id="success-alert3" class="alert alert-danger" role="alert">
 <center>( jpg ,  jpeg , png , pdf ) ﺗﺄﻛﺪ ﻣﻦ ﺃﻥ ﺟﻤﻴﻊ اﻟﻤﺮﻓﻘﺎﺕ ﺑﺈﻣﺘﺪاﺩا </center>
</div>';
          }
 
  if (isset($_GET['edit'])=='su') {
          echo '<br><br><div id="success-alert1" class="alert alert-success" role="alert">
 <center> ﺗﻢ اﻟﺘﻌﺪﻳﻞ ﺑﻨﺠﺎﺡ</center>
</div>';
          }

               if (isset($_GET['delete2'])=='no') {
          echo '<br><br><div id="success-alert2" class="alert alert-danger" role="alert">
        <center>  اﻟﺮﺟﺎء اﺧﺘﻴﺎﺭ اﻟﺒﻴﺎﻧﺎﺕ اﻟﻤﺮاﺩ ﺣﺬﻓﻬﺎ </center>
          </div>';
          }
          if (isset($_GET['name'])=='no') {
          echo '<br><br><div id="success-alert" class="alert alert-danger" role="alert">
 <center> ﻫﺬا اﻻﺳﻢ ﻣﻮﺟﻮﺩﻩ ﺑﺎﻟﻔﻌﻞ </center>
</div>';
          }
           if (isset($_GET['add'])=='su') {
          echo '<br><br><div id="success-alert1" class="alert alert-success" role="alert">
 <center>  ﺗﻢ اﻻﺿﺎﻓﺔ ﺑﻨﺠﺎﺡ</center>
</div>';
          }
                    if (isset($_GET['delete'])=='no') {
          echo '<br><br><div id="success-alert2" class="alert alert-danger" role="alert">
       <center>    ﻻ ﻳﻤﻜﻦ ﺣﺬﻑ ﻫﺬﻩ ﺑﺴﺒﺐ اﻧﻬﺎ ﻣﺪﺧﻠﻪ ﻓﻲ اﺣﺪ اﻟﺠﺪاﻭﻝ</center>
          </div>';
          }
      
           if (isset($_GET['delete1'])=='su') {
          echo '<br><br><div id="success-alert3" class="alert alert-success" role="alert">
<center> ﺗﻢ اﻟﺤﺬﻑ ﺑﻨﺠﺎﺡ</center></div>';
          }
          if (isset($_GET['nam'])=='su') {
          echo '<br><br><div id="success-alert1" class="alert alert-success" role="alert">
<center> ﺗﻢ ﺗﻐﻴﻴﺮ اﺳﻢ اﻟﻤﻮﻗﻊ ﺑﻨﺠﺎﺡ</center>
</div>';
}
 if (isset($_GET['error'])=='su') {
          echo '<br><br><div id="success-alert2" class="alert alert-danger" role="alert">
        <center> اﻟﺮﺟﺎء اﻟﺘﺤﻘﻖ ﻣﻦ ﺟﻤﻴﻊ اﻟﺤﻘﻮﻝ  ﻭﺇﻋﺎﺩﺓ اﻟﻤﺤﺎﻭﻟﺔ</center>
          </div>';
          }

           if (isset($_GET['error'])=='su') {
          echo '<br><br><div id="success-alert2" class="alert alert-danger" role="alert">
        <center> اﻟﺮﺟﺎء اﻟﺘﺤﻘﻖ ﻣﻦ ﺟﻤﻴﻊ اﻟﺤﻘﻮﻝ  ﻭﺇﻋﺎﺩﺓ اﻟﻤﺤﺎﻭﻟﺔ</center>
          </div>';
          }

  if (isset($_GET['recovery'])=='su') {
          echo '<br><br><div id="success-alert3" class="alert alert-success" role="alert">
<center> تم الإسترجاع  بنجاح</center></div>';
          }
          
          ?>