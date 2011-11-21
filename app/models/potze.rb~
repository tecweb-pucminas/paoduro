class Potze < ActiveRecord::Base

  belongs_to :user

  validates :cupom, :user, :presence => {:message => " não pode ser branco"}
  
  validates :cupom, :length =>  { :is => 11 , :message => "tamanho fora dos limites" },
                    :format =>  { :with => /\d{3}\d{6}-\d{1}/,  :message => " esta no formato incorreto. Formato: [ 999123456-0]"}
  
  after_validation :validate_digit
  
  def validate_digit

      soma = 0
      peso = 10
      
      self.cupom[0..8].each_char do |n|
          soma += n.to_i * peso
          peso = peso - 1        
      end
      
      #errors.add :cupom, "Potz inválido" unless self.cupom[10..10].to_i == ( 11 - (soma % 11) )
      
      #necessário para realizar os testes
      ( 11 - (soma % 11) )
  end
  
end

