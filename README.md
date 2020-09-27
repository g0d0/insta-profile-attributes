# How it works

It's pure php file with code stupdly simple that returns some Instagram profile infos given a username

# How use it?

```bash
git clone git@github.com:g0d0/insta-profile-attributes.git
php index.php antoniomquadrosfilho users.0.user.pk
```

# Examples

```bash
$ php index.php antoniomquadrosfilho users
$ php index.php antoniomquadrosfilho users.0
$ php index.php antoniomquadrosfilho users.0.user
$ php index.php antoniomquadrosfilho users.0.user.username
$ php index.php antoniomquadrosfilho users.0.user.full_name
$ php index.php antoniomquadrosfilho users.0.user.is_private
$ php index.php antoniomquadrosfilho users.0.user.profile_pic_url
$ php index.php antoniomquadrosfilho users.0.user.profile_pic_id
$ php index.php antoniomquadrosfilho users.0.user.is_verified
$ php index.php antoniomquadrosfilho users.0.user.has_anonymous_profile_picture
$ php index.php antoniomquadrosfilho users.0.user.mutual_followers_count
$ php index.php antoniomquadrosfilho users.0.user.account_badges
$ php index.php antoniomquadrosfilho users.0.user.latest_reel_media
```