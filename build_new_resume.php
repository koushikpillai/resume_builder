<html>
  <head>
    <title>texresume.com</title>
    <link rel="stylesheet" type="text/css" href="/styles/tex_style.css">
    <link href="/styles/tabcontent.css" rel="stylesheet" type="text/css" />
    <script src="tabcontent.js" type="text/javascript"></script> 
  </head>
  <body>
    <?php include 'header.php';?>
    
    <?php
    
    echo "<br />";echo $_POST['email'];echo "<br />";
    
    ?>
    <ul class="tabs"  data-persist="true"> 
    <li><a href="#view1">Features</a></li> 
    <li><a href="#view2">How to Use</a></li> 
    <li><a href="#view3">Source Code</a></li> 
    </ul> 
    
    <div class="tabcontents"> 
    <div id="view1"> content 1 </div> 
    <div id="view2"> content 2 </div> 
    <div id="view3"> content 3 </div> 
    </div>


<!--
<hr/>

<div class="tabholder">
  <div class="tabs" id="tab1"> <a class="tab" onclick="tabs.show('tab1')">Tab One</a></div>
  <div class="tabs" id="tab2"> <a class="tab" onclick="tabs.show('tab2')">Tab Two</a></div>
</div>

<form name="myForm" action="#" >

       
  <div id="tab1" class="tabContent" style="display:block">
    This is tab 1
    <div class="common_area">
      <table>
      <tr>
          <td>Field One: </td>
          <td><input type="text" name="fieldOne" id="exfieldOne" value=""/></td>
      </tr>
      <tr>
          <td>Field Two: </td>
          <td><input type="text" name="fieldTwo" id="exfieldTwo" value=""/></td>
      </tr>
      <tr>
          <td>Field Three: </td>
          <td><input type="text" name="fieldThree" id="exfieldThree" value=""/></td>
      </tr>
    </table>
    </div>
  </div>

  <div id="tab2" class="tabContent">
    This is tab 2
    <div class="common_area">
    <table>
      <tr>
          <td>Field 4: </td>
          <td><input type="text" name="fieldOne" id="exfieldOne" value=""/></td>
      </tr>
      <tr>
          <td>Field 5: </td>
          <td><input type="text" name="fieldTwo" id="exfieldTwo" value=""/></td>
      </tr>
      <tr>
          <td>Field 6: </td>
          <td><input type="text" name="fieldThree" id="exfieldThree" value=""/></td>
      </tr>
    </table>
    </div>
  </div>
  <input type="submit" action="create_resume.php" method="post">

</form>

<div id="common_stuff" class="common_stuff" >
    
 </div>    
<hr>


<script type="text/javascript">
  
var tabs = (function () {

    // More hackery, list the tab divs
    var tabs = ["tab1", "tab2"],
        domTabs = [],
        commonStuff,
        obj,
        cldrn,
        child,
        currentPrefix,
        show,
        i,
        j;

    // Recursively iterate through node children and rename form elements
    function renameNodes(node) {
        var i;
        if (node.length) {
            for (i = 0; i < node.length; i += 1) {
                renameNodes(node[i]);
            }
        } else {
            // rename any form-related elements
            if (typeof node.form !== 'undefined') {
                node.id = currentPrefix + '_' + node.id;
                node.name = currentPrefix + '_' + node.name;

            // Assume that form elements do not have child form elements
            } else if (node.children) {
                renameNodes(node.children);
            }
        }
    }

    // Clone the common stuff dom element and prepend the tabId to the elements
    function getCommonStuff(tabId) {
        var commonClone = commonStuff.cloneNode(true);
        // hack for ie6/7
        if (!!document.all) {
            commonClone.innerHTML = commonStuff.innerHTML;
        }

        currentPrefix = tabId;
        renameNodes(commonClone);
        return commonClone;
    }

    show = function showTab(tab) {
        var i;

        for (i = 0; i < domTabs.length; i += 1) {
            if (tabs[i] === tab) {
                domTabs[i].style.display = "block";
            } else {
                domTabs[i].style.display = "none";
            }
        }
    };

    // Let's keep a reference to the dom nodes so we don't have to fish
    for (i = 0; i < tabs.length; i += 1) {
        domTabs.push(document.getElementById(tabs[i]));
    }

    commonStuff = document.getElementById("common_stuff");

    // remove the common stuff from the form
    commonStuff.parentNode.removeChild(commonStuff);

    for (i = 0; i < domTabs.length; i += 1) {
        obj = domTabs[i];

        // Find the correct div
        cldrn = obj.childNodes;
        for (j = 0; j < cldrn.length; j += 1) {
            child = cldrn[j];
            if (child.className === "common_area") {
                // Copy the common content over to the tab
                child.appendChild(getCommonStuff(tabs[i]));
                break;
            }
        }
    }

    // show the first tab
    show(tabs[0]);

    return {
        show: show // return the show function
    };

}());

</script>-->


    
    
    
     <?php include 'footer.php';?>
  </body>
</html>
