# Installation

Follow the [Standard installation
instructions](http://semanticscuttle.sourceforge.net/docs/INSTALL.html#standard-installation-instructions)
in the SemanticScuttle documentation.

### Notes

The following SQL statements may be needed after installation to allow
creation of new bookmarks.

```sql
ALTER TABLE `sc_bookmarks` CHANGE `bVoting` `bVoting` INT(11)  NULL  DEFAULT NULL;
ALTER TABLE `sc_bookmarks` CHANGE `bVotes` `bVotes` INT(11)  NULL  DEFAULT NULL;
```

