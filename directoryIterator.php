<?php
$it = new DirectoryIterator('lib/Zend');
foreach ($it AS $file) {
  echo $file->getFilename() . "<br>";
  /*
  public int getATime ( void )
  public string getBasename ([ string $suffix ] )
  public int getCTime ( void )
  public string getExtension ( void )
  public SplFileInfo getFileInfo ([ string $class_name ] )
  public string getFilename ( void )
  public int getGroup ( void )
  public int getInode ( void )
  public string getLinkTarget ( void )
  public int getMTime ( void )
  public int getOwner ( void )
  public string getPath ( void )
  public SplFileInfo getPathInfo ([ string $class_name ] )
  public string getPathname ( void )
  public int getPerms ( void )
  public string getRealPath ( void )
  public int getSize ( void )
  public string getType ( void )
  public bool isDir ( void )
  public bool isExecutable ( void )
  public bool isFile ( void )
  public bool isLink ( void )
  public bool isReadable ( void )
  public bool isWritable ( void )
  */
}