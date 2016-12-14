<form action="<?php echo esc_url( home_url('/') ); ?>" class="<?php if(is_search()): echo 'page-search'; else: echo 'search-404'; endif; ?>">
    <fieldset>
        <input type="text" name="s" />
        <input type="submit" name="submit" />
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="18px" height="18px" viewBox="3.5 0.5 18 18" enable-background="new 3.5 0.5 18 18" xml:space="preserve">
            <circle fill="none" stroke="#FFFAE1" stroke-width="2" stroke-miterlimit="10" cx="10.5" cy="7.5" r="6"/>
            <line fill="none" stroke="#FFFAE1" stroke-width="2" stroke-miterlimit="10" x1="20.531" y1="17.531" x2="14.5" y2="11.5"/>
        </svg>
    </fieldset>
</form>