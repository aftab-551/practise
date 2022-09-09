<h2 style="text-align: center;">
        GRADE REPORT
    </h2>
    <table style="text-align: center;">
        <tr>
            <th colspan="9">FAKIR MOHAN AUTONOMOUS COLLEGE, BALASORE <br> MARKSHEET-2020</th>
        </tr>
        <?php $c=0; foreach($data->result() as $row) { ?>
                
                
                 <?php if($c < 1) { ?>
                    <tr class="HL">
                        <td style="border-right: none;" colspan="3" align="left">NAME - <?php echo $row->name; ?></td>
                        <td style="border-left: none;" colspan="6" align="right">SEMESTER - <?php echo $row->semester; ?><sup>th</sup></td>
                    </tr>
                    <tr class="HL">
                        <td colspan="3" align="left"><span class="left">ROLL NO - <?php echo $row->student_id; ?></span></td>
                        <td colspan="6" align="right"><span class="right">REGD. NO - <?php echo $row->registration; ?></span></td>
                    </tr>
                    <tr class="HL">
                        <td rowspan="2" style="background-color: #fff">SUBJECT NAME</td>
                        <td colspan="2">MID TERM</td>
                        <td colspan="2">SESSIONAL</td>
                        <td colspan="2">FINAL TERM</td>
                        <td colspan="2">TOTAL</td>
                    </tr>
                    <tr class="HL">
                        <td>FULL MARK</td>
                        <td>MARK OBTAINED</td>
                        <td>FM</td>
                        <td>MO</td>
                        <td>FM</td>
                        <td>MO</td>
                        <td>FM</td>
                        <td>MO</td>
                    </tr>
                <?php $c = $c + 1; } ?>
                

            
            
        
        
        <tr>
            <td class="HL"><?php echo $row->title; ?></td>
            <td><?php echo $row->midTM; ?></td>
            <td><?php echo $row->midOM; ?></td>
            <td><?php echo $row->sessionalTM; ?></td>
            <td><?php echo $row->sessionalOM; ?></td>
            <td><?php echo $row->finalTM; ?></td>
            <td><?php echo $row->finalOM; ?></td>
            <td><?php echo $row->total; ?></td>
            <td><?php echo $row->OM; ?></td>
        </tr>
        <?php } ?>
        <?php $c=0; foreach($data->result() as $col){ ?>
            <?php if($c <1 ){ ?>
                <tr>
                    <td colspan="7" align="right" class="HL">GRAND TOTAL</td>
                    <td class="HL"><?php echo $col->grandtotal;  ?></td>
                    <td class="HL"><?php echo $col->obtaintotal  ?></td>
                </tr>
            <?php $c = $c + 1; } ?>
        <?php } ?>
        
         <!-- <tr>
            <td class="HL">SUBJECT - 2</td>
            <td>15</td>
            <td>13</td>
            <td>25</td>
            <td>23</td>
            <td>60</td>
            <td>54</td>
            <td>100</td>
            <td>90</td>
         </tr>
         <tr>
            <td class="HL">SUBJECT - 3</td>
            <td>15</td>
            <td>10</td>
            <td>25</td>
            <td>20</td>
            <td>60</td>
            <td>50</td>
            <td>100</td>
            <td>80</td>
         </tr>
         <tr>
             <td class="HL">SUBJECT - 4</td>
             <td>15</td>
             <td>12</td>
             <td>25</td>
             <td>22</td>
             <td>60</td>
             <td>52</td>
             <td>100</td>
             <td>88</td>
         </tr> -->
        
    </table>