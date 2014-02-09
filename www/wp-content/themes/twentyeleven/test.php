<?php 
   
    $arrCalendar = array();
    
    if($_GET['calendar'] && $_GET['category'])  {
        $year = intval($_GET['calendar']);
        $category = intval($_GET['category']);        
    }    
   
   query_posts("cat=$category&posts_per_page=-1");
        if (have_posts()) : while (have_posts()) : the_post();
            $arrCalendar[] = get_the_date('Y');            
            endwhile;
        endif;
    
    $arrCal = array_unique($arrCalendar); 
    $arrCal = array_reverse($arrCal);
    
     echo "<center>";
          foreach ($arrCal as $postsYear)
          {
            echo "<a href='http://task.net/?calendar=".$postsYear."&category=".$category."'>".$postsYear."</a>";
                if($postsYear != end($arrCal))   {
                    echo "---";
                }
        
          }
     echo "</center>\n"; 
     echo "<hr>";
          
        //printing tear calendar
    print '<table cellpadding="10" cellspacing="100" border="1"><tr valign="top"><td width="550">';
    
    $i=1;
        while ($i <= 12)
        {
            print "<td>";
                
            print get_calendar(true, true, $i, $year); 
        
            print "</td><td  width=500></td>";
                 
            if($i%3==0)
            {
                    print "</tr><tr><td height=50></td></tr><td>";
            }
        
        $i++;
        }
        
    print "</table>";
?>
