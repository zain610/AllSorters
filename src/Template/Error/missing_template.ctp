<div class="container" style="margin-top: 10%">
    <h1 style="margin-left: 50%">
        Oops!</h1>
    <br>
    <br>
    <h2 style="margin-left: 10%">
        Sorry, an error has occured, Requested page not found!
    </h2>
    <br>
    <br>
    <br>
    <div style="margin-left: 50%">
        <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'center;margin-bottom:5%']) ?>
    </div>

</div>
