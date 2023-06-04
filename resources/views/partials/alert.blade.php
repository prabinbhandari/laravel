<div class="mt-2 p-2">
    <?php
    $successmessage=session("message:success");
    ?>
    @if($successmessage)
    <div class="alert alert-success">
        {{$successmessage}}
    </div>
    @endif
 </div>