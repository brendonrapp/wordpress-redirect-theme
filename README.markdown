# Wordpress Redirect Theme

Wordpress 3.0 added multisite capabilities, allowing users to host multiple blogs from one install.

However, multisite has a concept of a "root" blog, which is required to exist. For many use cases, this is not desirable - if the network is solely a collection of client blogs, none of them are a canonical "root" blog of the network, for example.

In these cases, the root blog is often just an empty, unused blog, but still visible from the Internet.

The purpose of this theme is to turn all of the "content" pages into redirects, making any attempt to view content on the "root" blog get redirected to another site (your company's home page, for example), effectively disabling the root blog. It still exists and Wordpress is still happy, but any attempt to view a post or page simply redirects to the URL you define in the settings.
