import web

render = web.template.render("mvc/view/")

class Ubuntu():

    def GET(self):
        try:
            return render.ubuntu() # renderizando formulario.html
        except Exception as e:
            return "Error " + str(e.args)