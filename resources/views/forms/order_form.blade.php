<div id="modal1" class="modal">
    <div class="modal-content">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat right"><i class="close material-icons">close</i></a>
        <h4 class="center">Форма заявки</h4>
        <form class="col s12" action="{{ url('/save-order') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input name="name" id="name" type="text" class="validate">
                    <label for="name">Ваше имя</label>
                </div>
                <div class="input-field col s12">
                    <input name="phone" id="phone" type="text" class="validate">
                    <label for="phone">Ваш телефон</label>
                </div>
                <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate">
                    <label for="email">Ваш email</label>
                </div>
                <div class="input-field col s12">
                    <select name="prices_id" id="prices_id">
                        <option value="1" selected>Одноместное размещение</option>
                        <option value="2">Двухместное размещение</option>
                        <option value="3">Трехместное размещение</option>
                        <option value="4">Четырехместное размещение</option>
                    </select>
                    <label for="prices_id">Выберите тип размещения</label>
                </div>
                <div class="input-field col s12">
                    <textarea name="comment" id="comment" class="materialize-textarea"></textarea>
                    <label for="comment">Комментарий к заявке</label>
                </div>
                <button class="waves-effect waves-light btn" style="background-color: #FF8822;">Оставить заявку</button>
            </div>
        </form>
    </div>
</div>