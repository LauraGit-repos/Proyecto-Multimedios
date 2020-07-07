function successMsg(){
    var msg = document.getElementById('success-msg');
    if(msg){
        var notify = Metro.notify;
        notify.setup({
            width: 300,
            duration: 2000,
            animation: 'easeOutQuad',
            container: $('#document-body')
        });
        notify.create(msg.value,null,{
            cls: "success"
        });
        notify.reset();
    }
}

successMsg();