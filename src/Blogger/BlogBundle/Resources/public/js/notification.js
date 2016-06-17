$(document).ready(function () {
    connectToHawk();
});

function connectToHawk()
{
    //отправляем запрос за токеном
    $.post(Routing.generate('hawk_token', {
        useSessionId: 1
    }), {}, function (data) {
        if(data.errors === false){
            //инициализируем подключение
            HAWK_API.init({
                user_id: data.result.id,
                token: data.result.token,
                url: data.result.ws,
                debug: true
            });

            //подписываемся на новые комментарии
            HAWK_API.bind_handler('new_comment', function(e, msg){
                //игнорируем служебные сообщения
                if(msg.from === 'hawk_client')
                    return;
                //находим список комментариев и последний из них
                //создаём объект нового
                var $comments = $('.previous-comments'),
                    $last = $comments.find('.comment:last'),
                    cls = 'odd',
                    $comment = $(msg.text.comment)
                    ;

                //определяемся с классом комментария
                if($last.size()){
                    cls = $last.hasClass('odd') ? 'even' : 'odd';
                }

                $comment
                    .removeClass('odd')
                    .addClass(cls)
                    .hide()
                ;
                //показываем
                $comments.append($comment);
                $comment.show('normal')
            });

            //подписываемся на новые комментарии
            HAWK_API.bind_handler('open', function(e, msg){
                var id = $('.blog').data('blogId');
                //добавляем пользователя в группу блога
                //если её нет, то она будет создана с публичным доступом
                HAWK_API.add_user_to_group(['blog_' + id]);
            });
        } else {
            if(data.errors !== 'no_user') {
                console.error(data);
            }
        }
    });
}