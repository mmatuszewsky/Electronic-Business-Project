<div id="_desktop_user_info">
  <div class="user-info">
    {if $logged}
        <a class="account" href="{$my_account_url}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" rel="nofollow" >
            <span class="hidden-sm-down">{$customerName}</span>
        </a>
        <a class="logout hidden-sm-down" href="{$logout_url}" rel="nofollow" > {l s='Sign out' d='Shop.Theme.Actions'} </a>
    {else}
      <a class="register" href="{$urls.pages.register}" title="{l s='Register' d='Shop.Theme.Customeraccount'}" rel="nofollow" >
        <span class="hidden-sm-down">{l s='Register' d='Shop.Theme.Actions'}</span>
      </a>
      <a class="my_account_url" href="{$my_account_url}" title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}" rel="nofollow" >
          <i class="material-icons my_account_url_icon">person</i>
        <span class="hidden-sm-down">{l s='Sign in' d='Shop.Theme.Actions'}</span>
      </a>
    {/if}
  </div>
</div>
