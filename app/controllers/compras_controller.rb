class ComprasController < ApplicationController
  # GET /compras
  # GET /compras.json
  def index
    @compras = Compra.where('cliente =?',  current_user.id)

    respond_to do |format|
      format.html # index.html.erb
      format.json { render :json => @compras }
    end
  end

  # GET /compras/1
  # GET /compras/1.json
  def show
    @compra = Compra.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render :json => @compra }
    end
  end

  # GET /compras/new
  # GET /compras/new.json
  def new
    @compra = Compra.new

    @produtos = Produto.where("user_id !=?", current_user.id)

    respond_to do |format|
      format.html # new.html.erb
      format.json { render :json => @compra }
    end
  end

  # GET /compras/1/edit
  def edit
    @compra = Compra.find(params[:id])
  end

  # POST /compras
  # POST /compras.json
  def create

    params[:produto_id].each do |p|

       @teste = Produto.find(p)

       @compra =  Compra.new
       @compra.produto_id = p
       @compra.user_id = Produto.find(p).user_id
       @compra.cliente = current_user.id
       @compra.save

    end

       redirect_to(compras_url)
  end

  # PUT /compras/1
  # PUT /compras/1.json
  def update
    @compra = Compra.find(params[:id])

    respond_to do |format|
      if @compra.update_attributes(params[:compra])
        format.html { redirect_to @compra, :notice => 'Compra was successfully updated.' }
        format.json { head :ok }
      else
        format.html { render :action => "edit" }
        format.json { render :json => @compra.errors, :status => :unprocessable_entity }
      end
    end
  end

  # DELETE /compras/1
  # DELETE /compras/1.json
  def destroy
    @compra = Compra.find(params[:id])
    @compra.destroy

    respond_to do |format|
      format.html { redirect_to compras_url }
      format.json { head :ok }
    end
  end
end
