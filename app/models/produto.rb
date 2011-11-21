class Produto < ActiveRecord::Base
  belongs_to :user

  def my_user

    user.id

  end
end
