echo '{% raw %}\n' > ../3dsmpubs.html
echo '<div class="container">' >> ../3dsmpubs.html
php go.php >> ../3dsmpubs.html
echo '</div>\n' >> ../3dsmpubs.html
echo '{% endraw %}' >> ../3dsmpubs.html


