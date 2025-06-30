<?php 

return fn() => <<<HTML
   <!DOCTYPE html>
      <head>
         <title>Timer - phpSPA</title>
      </head>
      <body>
         <div id="root">__CONTENT__</root>
         
         <!-- INCLUDE PHPSPA HELPER SCRIPT -->
         <script src="https://unpkg.com/phpspa-js/dist/phpspa.min.js"></script>
      </body>
   </html>
HTML;