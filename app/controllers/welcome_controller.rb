class WelcomeController < ApplicationController

   def index

    @compras = Compra.where('cliente =?', current_user.id)

    @vendas = Compra.where('user_id =?', current_user.id)

   end

   def out


   end

end
