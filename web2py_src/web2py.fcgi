#!/home/chuangca/bin/python

import cgitb
cgitb.enable()

import os
WEB2PY_PATH = os.path.dirname( os.path.abspath( __file__ ) )
#WEB2PY_PATH = '/home/chuangca/workspace/TermiteDataServer_GitHub/web2py'
ENVIRON = { 'web2py_path' : WEB2PY_PATH }

import gluon.main
import gluon.contrib.gateways.fcgi as fcgi
server = fcgi.WSGIServer( gluon.main.wsgibase, environ = ENVIRON )
server.run()
