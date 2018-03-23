<div class="wrap">

<h1>{{ __('Google Contacts for WordPress', $td) }}</h1>

<h2>{{ __('Setup Step 2 - Link Google Account', $td) }}</h2>

<p>{{ __('To link your Google account with this plugin, please click the link below.', $td) }}</p>
<p>{{ __('You should sign in with the Google account you wish to store the Google Contacts in.', $td) }}</p>

<p><a target="_blank" rel="noopener noreferrer" href="{{ $authUrl }}">{{ $authUrl }}</a></p>

<p>{{ __('When done, enter the provided auth code below.', $td) }}</p>

<form method="POST" action="/wp-admin/admin-post.php">
    <p>{{ __('Auth Code:', $td) }} <input name="auth_code" value=""/></p>
    <input type="submit" value="{{ __('Next', $td) }} >" />
    <input type="hidden" name="action" value="gcfw_update_refresh_token" />
</form>

</div>