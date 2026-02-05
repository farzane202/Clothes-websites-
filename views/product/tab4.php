
    <h4> Insert your Questions </h4>
    <textarea id="question_matn">  </textarea>
    <span class="btn" style="margin-top: 33px;margin-left: 20px;"> save question </span>
    <h4> Questions </h4>
    <?php
    $questions=$data[0];
    $answers=$data[1];
    foreach ($questions as $row){
    ?>
    <div class="questions">
        <div class="question_header">
            <span> Your question </span>
            <p style="margin-top: -27px;margin-bottom: 3px;"> farzane </p>
            <p style="font-size: 8.5pt;"> <?=$row['date']?> </p>
        </div>
        <div class="question_content">
            <p> <?=$row['text']?> </p>
        </div>
    </div>
        <div class="answer">
            <p style="color:#545454"> reply : </p>
            <p> <?=$answers[$row['id']]['text']?> </p>
        </div>
    <?php
     }
    ?>
<style>
    .answer{
        width: 1088px;
        margin-left: 20px;
        background: #d9ebfe;
        font-family: GothamMedium;
        padding: 8px;
        margin-top: 15px;
        box-shadow: -1px 3px 7px #ccc;
    }
    .answer p{
        color:#0016ff;
        font-size: 10pt;
    }
      #question_matn{
        width: 900px;
        height:160px;
        margin-left: 15px;
    }
      .questions{
        width: 1100px;
        margin-left: 20px;
    }
      .questions .question_header{
        height:35px;
        background: #616161;
    }
      .questions .question_header span{
        font-family: GothamMedium;
        color:white;
        font-size: 11pt;
        padding-left: 10px;
        line-height: 29px;
    }
      .questions .question_header p{
        font-family: GothamMedium;
        font-size: 10.5pt;
        color:white;
        text-align: right;
        margin: 0;
        margin-right: 10px;
    }
      .questions .question_content{
        box-shadow: 3px 4px 3px #ccc;
        height: 50px;
    }
      .questions .question_content p{
        font-family: GothamMedium;
        font-size: 11pt;
        padding-left: 15px;
        color:#616161;
    }


</style>