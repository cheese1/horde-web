<p>Ingo, the &quot;Email Filter Rules Manager&quot;, started as a frontend for
the <a href="http://tools.ietf.org/html/rfc5228">Sieve filter language</a>, and
is now a generic and complete filter rule frontend that currently is able to
create
Sieve, <a href="http://www.procmail.org/">procmail</a>, <a href="http://www.courier-mta.org/maildrop/">maildrop</a>,
and IMAP filter rules. The IMAP filter driver translates the filter rules on
demand to IMAP commands.</p>

<p>Ingo is the default filtering management application used in
<?php echo $this->linkTo('IMP', array('controller' => 'app', 'action' => 'app', 'app' => 'imp')) ?>.</p>

<p>Ingo is able to create and eventually run server as well as client filter
scripts. The filter script API is flexible enough that any number of filter
drivers can be written and &quot;plugged in&quot;. Each filter driver exposes
it's capabilities to Ingo, that in return adapts its UI to display only those
rules and features that the driver can actually handle.</p>

<p>It supports a set of &quot;special&quot; rules that are either translated to
their native counterparts of the filter script backend or emulated through
filter script commands. These rules are Blacklist, Whitelist, Forwards, and
Vacation.</p>

<p>Ingo abstracts storage, script, and transport backends. That means that the
filter rules in Ingo's internal format can be stored in several
places. Currently, both Horde's preferences and SQL-based storage are
supported. The transport backends are responsible
for uploading the generated filter scripts to the filter backends, for example
to <a href="http://asg.web.cmu.edu/cyrus/">Cyrus</a>' timsieved daemon or
through Horde's VFS (Virtual File Storage) API via FTP to the users' home
directories or into a SQL database. System administrators are able to switch to
a different filter system or script storage at any time and the users' filter
rules will persist.</p>

<p>The application's name was created during the quest for a nice,
&quot;hordish&quot; name for the new born code, and is short for &quot;Mail
comes 'in'...Where does it 'go'?&quot;.</p>
