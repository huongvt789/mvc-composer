<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="wrapper">
    {foreach from=$names key=k item=i}
    Name:{$i.studentName}
        <br/>
    {/foreach}
</div>
</body>
</html>