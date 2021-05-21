import web

render = web.template.render("mvc/view/")

class Index():

    def GET(self):
        try:
            return render.docker() # renderizando formulario.html
        except Exception as e:
            return "Error " + str(e.args)